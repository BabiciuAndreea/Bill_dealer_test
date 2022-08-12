<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UsersBill;
use Illuminate\Http\Request;


class UsersBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'users_bill.usersIndex',
            [
                'users' => UsersBill::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users_bill.usersFormular');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('redirect to the store method');

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users_bills',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'cnp' => 'required|unique:users_bills',
            //'role' => 'required',
        ]); //

        UsersBill::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone,
            'cnp' => $request->cnp,
            'role' => $request->role
        ]);
        return redirect(route('index'))->with('success', 'User added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view(
            'users_bill.usersShow',
            [
                'user' => UsersBill::findOrFail($id)
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users_bill.usersEdit', [
            'user' => UsersBill::where('id', $id)->first()
            // 'user' => UsersBill::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('Test');
        UsersBill::where('id', $id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone,
            'cnp' => $request->cnp,
            'role' => $request->role
        ]);
        return redirect(route('index'))->with('success', 'User edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UsersBill::destroy($id);

        return redirect(route('users_bill.index'))->with('message', 'Deleted');
    }
}
