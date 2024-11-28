<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ExampleController extends Controller {
    public function contact(){
        $name = 'S A Faroque';
        $address = 'Dhaka';
        $skils = ['HTML', 'CSS', 'PHP', 'Laravel', 'Javascript'];
        
        return view('contact', compact('name', 'address', 'skils'));
   }

   public function index(){
    return 'hi';
    // return view('index');
   }
}
