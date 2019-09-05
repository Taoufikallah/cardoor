<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\brand;
use Auth;
use Storage;

use Image;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $car = Post::where('user_id', Auth::user()->id)->get();
        /* dd($car);exit; */
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
        $brands =  Brand::pluck('name', 'id');
    
        return view('admin/cars/create', compact('car', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Post;

        $car->title = $request->title;
       $car->body = $request->body;
       $car->price = $request->price;
       $car->fuel = $request->fuel;
       $car->color = $request->color;
       $car->year = $request->year;
       $car->fiscal_power = $request->fiscal_power;
       $car->number_doors = $request->number_doors;
       $car->number_places = $request->number_places;
       $car->gearbox = $request->gearbox;
       $car->brand_id = $request->brand_id;
       $car->cover_image = $request->cover_image;

       $this->validate($request, array(
           
           'title' => 'required|max:255',
           'body'=> 'required',
           'price'=> 'required',
           'fuel'=> 'required',
           'year'=> 'required',
           'color'=> 'required',
           'fiscal_power'=> 'required',
           'number_doors'=> 'required',
           'number_places'=> 'required',
           'gearbox'=> 'required',
           'brand_id'=> 'required',
           'cover_image' => 'image|nullable|max:1999'
       ));

       // Handle File Upload
       if($request->hasFile('cover_image')) {
           $car->cover_image = $request->cover_image->store('cover_image');
       }

       /* if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        } */

       /* $car = new Post; */
       /* $car->title = $request->title;
       $car->body = $request->body;
       $car->price = $request->price;
       $car->fuel = $request->fuel;
       $car->color = $request->color;
       $car->year = $request->year;
       $car->fiscal_power = $request->fiscal_power;
       $car->number_doors = $request->number_doors;
       $car->number_places = $request->number_places;
       $car->gearbox = $request->gearbox;
       $car->brand_id = $request->brand_id;
       $car->cover_image = $fileNameToStore; */
       
       $car->user_id = Auth::user()->id;

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
        $brands =  Brand::pluck('name', 'id');
        return view('admin/cars/edit', compact('car','brands'));
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

        $car->title = $request->title;
       $car->body = $request->body;
       $car->price = $request->price;
       $car->fuel = $request->fuel;
       $car->color = $request->color;
       $car->year = $request->year;
       $car->fiscal_power = $request->fiscal_power;
       $car->number_doors = $request->number_doors;
       $car->number_places = $request->number_places;
       $car->gearbox = $request->gearbox;
       $car->brand_id = $request->brand_id;
       $car->cover_image = $request->cover_image;

        $this->validate($request, array(
            'title' => 'required|max:255',
            'body'=> 'required',
            'price'=> 'required',
            'fuel'=> 'required',
            'year'=> 'required',
            'color'=> 'required',
            'fiscal_power'=> 'required',
            'number_doors'=> 'required',
            'number_places'=> 'required',
            'gearbox'=> 'required',
            'brand_id'=> 'required',
            'cover_image' => 'image|nullable|max:1999'
        ));
        

        
// Handle File Upload
if($request->hasFile('cover_image')) {
    $car->cover_image = $request->cover_image->store('cover_image');
}
       /* if($request->hasFile('cover_image')){
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
        } */
        

       

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
