<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use App\Mail\UpdateMail;
>>>>>>> Stashed changes

class Settings extends Controller
{
    //
    public function profileUpdate(Request $request){
        //validation rules

        if(Auth::user())
<<<<<<< Updated upstream
      {
         $user=User::find(Auth::user()->id);
         
      }
      $user->first_name=$request->input('first_name');
      $user->last_name=$request->input('last_name');
      $user->email=$request->input('email');
      $user->save();
        return back()->with('message','Profile Updated');
    }
=======
        {
           $user=User::find(Auth::user()->id);
           
        }
        $user->first_name=$request['first_name'];
        $user->last_name=$request['last_name'];
        $user->email=$request['email'];
        $user->save();
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to($user->email)->send(new UpdateMail($mailData));
        
        return redirect()->route('settings');
       }

      public function update_password(Request $request )
      {
            $user=User::find(Auth::user()->email);
          $current_user=auth()->user();
          if(Hash::check($request->old_password,$current_user->password))
          {
              $current_user->update([
                  'password'=>bcrypt($request->new_password)
              ]);
              $mailData = [
                'title' => 'Mail from ItSolutionStuff.com',
                'body' => 'This is for testing email using smtp.'
            ];
              Mail::to($user)->send(new UpdateMail($mailData));
        
              return redirect()->route('settings');
          }
        
      }
      
>>>>>>> Stashed changes

}
