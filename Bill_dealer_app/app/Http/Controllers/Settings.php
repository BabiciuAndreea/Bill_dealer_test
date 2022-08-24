<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Settings extends Controller
{
    //
    public function profileUpdate(Request $request){
        //validation rules

        $request->validate([
            'first_name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user =Auth::user();
        $user->first_name = $request['first_name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message','Profile Updated');
    }

}
