<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\brand;
use App\client
;
class PagesController extends Controller
{   
    public function index(Request $request){
        
        $qBrand = $request->get('q_brand');
        if ($qBrand && $qBrand != '') {
            $car = Post::where('brand_id', $qBrand);
            $car = Post::orderBy('title','asc');
            
            //->orderBy('name', 'desc')
            //->take(10)
            /* ->get() */
        } else {
            $car = Post::all();
        }

        $car = Post::paginate(9);
        //$brands =  Brand::pluck('name', 'id')->prepend('selectioner'); 
        $brands =  Brand::all(); 

        //dd($brands); exit;
        
    
        $title ='welcome to cardoor!!';

        return view('frontend/pages.index',[], compact('car','brands', 'qBrand'));
        /* $cars = Car::orderBy('title','asc')->paginate(2); */
       /*  return view('frontend/pages.index')->with('cars',$cars); */
    }
    /* public function show($id)
    {
        $car = Post::find($id);
        dd($car);exit;
        return view('frontend/pages.cars', compact('car'));
    } */

    public function car()
    {
        $car = Post::all();
        /* dd($car);exit; */
        return view('frontend/pages.cars', compact('car'))/* ->with('posts', $car->posts) */;
    }

    public function show($id)
    {
        $car = Post::find($id);
        return view('frontend/pages/show', compact('car'));
    }

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
       $car->name = $request->name;
       $car->email = $request->email;
       $car->phone = $request->phone;
       $car->adress = $request->adress;
       $car->city = $request->city;
       $car->age = $request->license;

      
       
       $car->save();

       return redirect()->route('admin');
    }













    public function about(){
        return view('frontend/pages.about');
    }
    public function services(){
        return view('frontend/pages.services');
    }
    public function cars(){
        return view('frontend/pages.cars');
    }
    public function contact(){
        return view('frontend/pages.contact');
    }
}
