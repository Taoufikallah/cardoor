<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PagesController extends Controller
{
    public function index(){
        $title ='welcome to cardoor!!';
        return view('frontend/pages.index', compact('title'));
        /* $cars = Car::orderBy('title','asc')->paginate(2); */
       /*  return view('frontend/pages.index')->with('cars',$cars); */
    }
    /* public function show($id)
    {
        $car = Post::find($id);
        dd($car);exit;
        return view('frontend/pages.cars', compact('car'));
    } */

    public function show()
    {
        $car = Post::all();
        /* dd($car);exit; */
        return view('frontend/pages.cars', compact('car'))/* ->with('posts', $car->posts) */;
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
