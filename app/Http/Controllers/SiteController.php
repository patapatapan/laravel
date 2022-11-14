<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function hello()
    {
        return 'hello';
    }
    public function dashboard()
    {
        return view('dashboard');
    }

    /* public function gallery()
{
return view('gallery');
}*/
}