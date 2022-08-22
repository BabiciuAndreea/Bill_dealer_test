<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Settings extends Controller
{
    //
    public function edit(Request $request) {
        if(Auth::user())
        {
           $user=User::find(Auth::user()->id);
           
        }
        $user->first_name=$request['first_name'];
        $user->last_name=$request['last_name'];
        $user->email=$request['email'];
        $user->save();
        return redirect('settings')->with('message','Profile updated succesfully');
        
       
          
         
       }
      public function update_password(Request $request )
      {
          $current_user=auth()->user();
          if(Hash::check($request->old_password,$current_user->password))
          {
              $current_user->update([
                  'password'=>bcrypt($request->new_password)
              ]);
              return redirect()->back()->with('succes','old password succesfully updated');
          }
          else
              return redirect()->back()->with('error','Old password does not match');
      }

}
