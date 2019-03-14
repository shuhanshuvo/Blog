<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('home');
    }

    public function about(){
    	return view('home');
    }

    public function Alumni_login(){
    	return view('Alumni_login');
    }

    public function Profile_info(){
    	return view('Profile_info');
    }

    public function Alumni_profile(){
    	return view('Alumni_profile');
    }
}
