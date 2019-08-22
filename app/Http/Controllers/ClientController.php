<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

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
        return view('admin/clients/index', compact('client'));
        $client = Car::orderBy('title','asc')->paginate(2);
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
           'name'=> 'required',
           'email'=> 'required',
           'password'=> 'required',

       ));

       

       $client = new Client;
       $client->name = $request->name;
       $client->email = $request->email;
       $client->password = $request->password;
      
       
       $client->save();
       return view('frontend/pages/registerr', compact('client'));
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
        return view('admin/clients/show', compact('client'));
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
        return view('admin/clients/edit', compact('client'));
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

        $client->name = $request->name;
        $client->email = $request->email;
        $client->username = $request->username;
        $client->password = $request->password;
       

        $this->validate($request, array(
            'name'=> 'required',
            'email'=> 'required',
            'username'=> 'required',
            'password'=> 'required',
            
        ));

        $client->save();

        return redirect()->route('/admin/client');
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
