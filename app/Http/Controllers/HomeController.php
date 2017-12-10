<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('home.pages.home');
    }

    public function products()
    {
    	return view('home.pages.products');
    }

    public function single()
    {
    	return view('home.pages.single');
    }

    public function login()
    {
    	return view('home.pages.login');
    }

    public function about()
    {
    	return view('home.pages.about');
    }

    public function admin_home()
    {
        return view('admin.pages.admin_home');
    }

}
