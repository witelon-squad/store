<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use Redirect;


class UserDataChange extends Controller
{
    public function CheckData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '_email' => 'required|string|email|max:255',
            '_name' => 'required|string|max:255',
            '_pass' => 'required|string|min:8'
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return Redirect::back()->withErrors('Error', 'Dane nie zostały zmienione');
        }
        $userId = Auth::id();
        $email = $request->input('_email');
        $name = $request->input('_name');
        $pass = Hash::make($request->input('_pass'));
        $var = self::save($userId, $email, $name, $pass);
        if ($var == true) {
            return back()->with('success', 'Dane zostały zmienione');
        } else {
            return back()->withErrors('Error', 'Dane nie zostały zmienione');
        }
    }

    protected function save(int $id, string $email = null, string $name = null, string $pass = null)
    {
        $affected = DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'email' => $email,
                'password' => $pass
            ]);
        return true;
    }
}
