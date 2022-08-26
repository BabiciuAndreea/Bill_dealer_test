<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view(){
        return view('menu.employee');
    }

    public function index()
    {
        $employees = User::latest()->paginate(8);

        return view('menu.employee',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

        return redirect()->route('addEmployee');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $employee)
    {
        return view('menu.editEmployee',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $employee)
    {

        $employee->update(
            $request->all());

        return redirect()->route('addEmployee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $employee)
    {
        $employee->delete();

        return redirect()->route('addEmployee')
            ->with('success','Employee deleted successfully');
    }
}