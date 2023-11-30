<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('frontend.index');
    }
    function blog()
    {
        return view('frontend.blog');
    }
    function blogDetail()
    {
        return view('frontend.blog-details');
    }
    function inspiration()
    {
        return view('frontend.inspiration');
    }
    function kategorien()
    {
        return view('frontend.kategorien');
    }
    function product()
    {
        return view('frontend.produkte');
    }
    function productDetals()
    {
        return view('frontend.produkte-details');
    }
    function ueberUnsEdlesbad()
    {
        return view('frontend.ueber-uns-edlesbad');
    }
    function unsereLieferanten()
    {
        return view('frontend.unsere-lieferanten');
    }
    function dashbaord()
    {
        return view('frontend.user-dashboard');
    }
}
