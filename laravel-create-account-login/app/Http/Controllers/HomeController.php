<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function  home () {
        return view('Home/home');
    }
    public function  login () {
        return view('Login/login');
    }
    public function  create_account () {
        return view('Create_account/create_account');
    }
}
