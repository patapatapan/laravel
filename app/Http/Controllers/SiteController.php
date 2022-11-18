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

    public function gallery()
    {
        return view('gallery');
    }

    public function demo()
    {
        //-----第一種
        //return view('test.demo')->with(['name' => '彥彰', 'age' => '22']);
        //-----第二種
        /*$data = [];
        $data['name'] = '彥彰';
        $data['age'] = '<b>22</b>';
        return view('demo', $data);*/
        //-----第三種
        $name = '彥彰';
        $age = '<b>22</b>';
        return view('test.demo', compact('name', 'age'));
    }
}