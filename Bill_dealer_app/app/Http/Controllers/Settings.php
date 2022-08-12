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

        if(Auth::user())
      {
         $user=User::find(Auth::user()->id);
         
      }
      $user->first_name=$request->input('first_name');
      $user->last_name=$request->input('last_name');
      $user->email=$request->input('email');
      $user->save();
        return back()->with('message','Profile Updated');
    }

}
