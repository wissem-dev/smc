<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all() ;

        return view('client',['clients'=>$clients,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all() ;
        return view('client',['clients'=>$clients,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client() ;
        $client->CIN = $request->input('CIN') ;
        $client->firstName = $request->input('firstName') ;
        $client->secondName = $request->input('secondName') ;
        $client->PhoneNumber = $request->input('PhoneNumber') ;
        $client->save() ;
        return redirect('/') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        $clients = Client::all() ;
        return view('client',['clients'=>$clients,'client'=>$clients,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        $clients = Client::all() ;
        return view('client',['clients'=>$clients,'client'=>$client,'layout'=>'edit']);

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
        $client = Client::find($id);
        $client->CIN = $request->input('CIN') ;
        $client->firstName = $request->input('firstName') ;
        $client->secondName = $request->input('secondName') ;
        $client->PhoneNumber = $request->input('PhoneNumber') ;
        $client->save() ;
        return redirect('/') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete() ;
        session()->flash("Client Deleted successfuly");

        return redirect('/') ;
    }
}
