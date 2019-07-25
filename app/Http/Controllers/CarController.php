<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Storage;

use Image;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Post::all();
        return view('admin\cars\index', compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = Post::all();
        return view('admin/cars/create', compact('car'));
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
           'title' => 'required|max:255',
           'body'=> 'required',
           'price'=> 'required',
           'fuel'=> 'required',
           'year'=> 'required',
           'gearbox'=> 'required',
           'cover_image' => 'image|nullable|max:1999'
       ));

       // Handle File Upload
       if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

       $car = new Post;
       $car->title = $request->title;
       $car->body = $request->body;
       $car->price = $request->price;
       $car->fuel = $request->fuel;
       $car->year = $request->year;
       $car->gearbox = $request->gearbox;
       $car->cover_image = $fileNameToStore;
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
        $car = Post::find($id);
        return view('admin/cars/show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Post::find($id);
        return view('admin/cars/edit', compact('car'));
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
        $car = Post::find($id);

        $this->validate($request, array(
            'title' => 'required|max:255',
           'body'=> 'required',
           'price'=> 'required',
           'fuel'=> 'required',
           'year'=> 'required',
           'gearbox'=> 'required',
           'cover_image' => 'image|nullable|max:1999'
        ));

        // Handle File Upload
       if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $car = Post::find($id);

        $car->title = $request->title;
        $car->body = $request->body;
        $car->price = $request->price;
        $car->fuel = $request->fuel;
        $car->year = $request->year;
        $car->gearbox = $request->gearbox;
        $car->cover_image = $fileNameToStore;

        $car->save();

        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Post::find($id);
        $car->delete();
        return redirect()->route('admin');
    }
}
