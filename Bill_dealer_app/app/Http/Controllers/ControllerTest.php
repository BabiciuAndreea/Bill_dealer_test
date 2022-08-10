<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class ControllerTest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Comanda::all();
        dd($posts);

        return view('exempluCerere');


        // $posts = DB::table('comandas')
        //     ->get();
        // return view(
        //     'exempluCerere',
        //     [
        //         'posts' => $posts
        //     ]
        // );



        // $users = DB::table('comandas')->get();

        // // foreach ($posts as $post) {
        // //     echo $post->id . ' ';
        // //     echo $post->tva_total;
        // //     echo '<br>';
        // // }
        // echo '<br>';
        // foreach ($users as $user) {
        //     echo $user->id . ' ';
        //     echo $user->tva_total;
        //     echo '<br>';
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Comanda::findOrFail($id);

        return view('comanda.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
