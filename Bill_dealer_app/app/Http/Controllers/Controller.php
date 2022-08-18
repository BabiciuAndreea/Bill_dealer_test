<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    public function userUpdate( Request $request)
    {
        $userUpdate = [
            'id'            =>  $request->idUpdate,
            'first_name'    =>  $request->first_name,
            'last_name'     =>  $request->last_name,
            'email'    =>  $request->email,
           
        ];
        // return dd($userUpdate);
        DB::table('users')->where('id',$request->idUpdate)->update($userUpdate);
        return redirect()->back()->with('userUpdate','.');
    }



/* Process the logout request */
public function logout(Request $request) {
        Auth::logout();
        return view('welcome');
}
}
