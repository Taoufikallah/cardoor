<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        
        return view('admin\clients\index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        return view('frontend/clients/create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, array(
           'name' => 'required',
           'email'=> 'required',
           'phone'=> 'required',
           'adress'=> 'required',
           'city'=> 'required',
           'age'=> 'required',
           'license'=> 'required',
       ));

       

       $client = new Client;
       $client->name = $request->name;
       $client->email = $request->email;
       $client->phone = $request->phone;
       $client->adress = $request->adress;
       $client->city = $request->city;
       $client->age = $request->age;
       $client->license = $request->license;

      
       
       $client->save();
       return view('frontend\pages\index', compact('client'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
