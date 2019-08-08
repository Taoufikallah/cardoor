<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $message = new Message;

        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $this->validate($request, array(
           
            'name' => 'required|max:255',
            'phone'=> 'required',
            'subject'=> 'required',
            'message'=> 'required',
            
        ));

        $message->save();

        return view('frontend/pages.contact');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* $message = Brand::all();
        return view('frontend/pages.contact/create', compact('message')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Post;

        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $this->validate($request, array(
           
            'name' => 'required|max:255',
            'phone'=> 'required',
            'subject'=> 'required',
            'message'=> 'required',
            
        ));

        $car->save();

        return redirect()->route('admin');
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
