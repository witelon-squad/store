<?php

namespace App\Http\Controllers\Warehouse;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;


class WarehouseController extends Controller
{
    public function GetProductQuantity(int $id)
    {
        $warehouse = env('IP_WAREHOUSE', '');
        $this->warehouse = $warehouse;
        $client = new Client();
        $res = $client->request('GET', 'http://' . $warehouse .'/'.$id);
        $data_product = $res->getBody();
        $json_results = json_decode($data_product, true);
        return  $json_results;
    }
}
