<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\UpdateMail;
use Illuminate\Support\Facades\Mail;

class Settings extends Controller
{
    //
    public function profileUpdate(Request $request){
        //validation rules

        if(Auth::user())

      {
         $user=User::find(Auth::user()->id);
         
      }
      $validated = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
    ]);
      $user->first_name=$request->input('first_name');
      $user->last_name=$request->input('last_name');
      $user->email=$request->input('email');
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
           
          $current_user=auth()->user();
          if(Hash::check($request->old_password,$current_user->password))
          {
              $current_user->update([
                  'password'=>bcrypt($request->new_password)
              ]);
              
        
          }
          $mailData = [
              'title' => 'Mail from ItSolutionStuff.com',
              'body' => 'This is for testing email using smtp.'
          ];
           
          Mail::to($current_user->email)->send(new UpdateMail($mailData));
             
          return redirect()->route('settings');

    }
    public function downloadPDF(Request $request) {
        if(Auth::user())

        {
           $customer=User::find(Auth::user()->id);
           
        }
        $customer->pdf_template=$request->input('flexRadioDefault'); 
        $customer->save();  
        return redirect()->route('settings');
}
}
