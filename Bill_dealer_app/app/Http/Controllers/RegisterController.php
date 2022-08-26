<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        if (User::exists()) {
            $request->validate([
                'first_name' =>  ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'address' => ['required', 'string', 'max:1000'],
                'phone' => ['required', 'string', 'max:10'],
                'cnp' => 'required|unique:users',
                'password' => ['required', 'string', 'confirmed'],
            ]);
    
            // Employee::create($request->all());
    
            // return redirect()->route('addEmployee');
    
            $employee = User::create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'address' => $request['address'],
                'phone' => $request['phone'],
                'cnp' => $request['cnp'],
                'password' => Hash::make($request['password']),
            ]);
    
            if(request()->hasFile('avatar')){
                $avatar = request()->file('avatar')->getClientOriginalName();
                request()->file('avatar')->storeAs($avatar, '');
                $employee->update(['avatar' => $avatar]);
            }
    
            $employee->save();
    
            return redirect()->route('welcome');
        } else {
            $request->validate([
                'first_name' =>  ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'address' => ['required', 'string', 'max:1000'],
                'phone' => ['required', 'string', 'max:10'],
                'cnp' => 'required|unique:users',
                'password' => ['required', 'string', 'confirmed'],
            ]);
    
            // Employee::create($request->all());
    
            // return redirect()->route('addEmployee');
    
            $employee = User::create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'address' => $request['address'],
                'phone' => $request['phone'],
                'cnp' => $request['cnp'],
                'password' => Hash::make($request['password']),
                'role' => 'admin',
            ]);
    
            if(request()->hasFile('avatar')){
                $avatar = request()->file('avatar')->getClientOriginalName();
                request()->file('avatar')->storeAs($avatar, '');
                $employee->update(['avatar' => $avatar]);
            }
    
            $employee->save();
    
            return redirect()->route('welcome');
        }
    }
}
