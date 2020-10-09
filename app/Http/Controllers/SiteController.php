<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('Site.index');
    }


    public function contact() {
        return view('Site.contact');

    }

}