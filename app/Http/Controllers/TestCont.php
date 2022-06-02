<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCont extends Controller
{
    public function master(){
        return view('master.master');
    }

    public function home()
    {
        return view('master.home');
    }
    public function contact()
    {
        return view('master.contact');
    }
    public function about()
    {
        return view('master.about');
    }



}
