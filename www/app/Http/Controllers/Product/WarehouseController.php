<?php

namespace App\Http\Controllers\Product;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use Redirect;
use DateTime;

class WarehouseController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    protected function GetRensponseEndpoint()
    {
        $warehouse = env('IP_WAREHOUSE', '');
        $this->warehouse = $warehouse;
        $client = new Client();
        $res = $client->request('GET', 'http://' . $warehouse);
        $data_product = $res->getBody();
        $json_results = json_decode($data_product, true);
        return $json_results;
    }

    protected function ListKey(): array
    {
        $json_results = self::GetRensponseEndpoint();
        $list_key = (string)"";
        $data = array_keys($json_results);
        foreach ($json_results as $array) {
            $list_key = array_keys($array);
            break;

        }
        return $list_key;
    }

    private function ListNameCategories(): array
    {
        $Categories = self::ListKey();
        $ListNamesCategories = [];
        foreach ($Categories as $NameCategories) {
            $test = substr($NameCategories, 0, -4);
            array_push($ListNamesCategories, $test);

        }
        return $ListNamesCategories;
    }

    private function SaveCategories(array $ListNamesCategories): array
    {
        foreach ($ListNamesCategories as $values) {
            DB::insert('insert into product_categories (categories) values (?)', [$values]);
        }
    }

    private function CompareArray(): bool
    {

        $results = (array)DB::select('select categories from product_categories ');
        $result_array = [];
        foreach ($results as $var) {
            foreach ($var as $value => $name_categories) {
                array_push($result_array, $name_categories);
            }
        }
        $missing_categories = array_diff(self::ListNameCategories(), $result_array);
        if ($missing_categories == []) {
            return false;
        } else {
            self::SaveCategories($missing_categories);
            return true;
        }


    }

    private function SelectIdCategories(string $NameCategories): int
    {

        $query = DB::table('product_categories')->where('categories', '=', $NameCategories)->get()->toArray();
        foreach ($query as $data) {
            foreach ($data as $data_row) {
                return $data_row;
            }
        }
    }

    private function CheckExistProduct(string $name): bool
    {
        $query = DB::table('products')->where('name', $name)->get()->count();
        if ($query >= 1)
            return true;
        else
            return false;
    }

    private function SaveProducts(): bool
    {
        $now = new DateTime();
        $json_results = self::GetRensponseEndpoint();
        foreach ($json_results['_embedded'] as $data_result) {
            foreach ($data_result as $data_result) {
                if (!self::CheckExistProduct($data_result['name'])) {
                    DB::insert('insert into products (id,name,description,price,id_categories,created_at,updated_at) values (?,?,?,?,?,?,?)', [
                            $data_result['id'],
                            $data_result['name'],
                            $data_result['description'],
                            $data_result['price'],
                            self::SelectIdCategories($data_result['type']),
                            $now->format('Y-m-d H:i:s'),
                            $now->format('Y-m-d H:i:s')

                        ]
                    );
                }
            }
        }
        return true;
    }

    public function SyncStorage()
    {
        self::SaveProducts();
        return redirect()->route('products.index')
            ->with('success','Synchronizacja się powiodła');

    }

}
