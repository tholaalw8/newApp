<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function home(){

        return view('home');
    }

    public function movie(){
        return view('movie');
    }


    public function contact(){
        return view('tickets.create');

    }

 

}
