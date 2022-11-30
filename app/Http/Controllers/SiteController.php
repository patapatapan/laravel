<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illu

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

    public function demo2()
    {
        //-----第一種
        //return view('test.demo')->with(['name' => '彥彰', 'age' => '22']);
        //-----第二種
        /*$data = [];
        $data['name'] = '彥彰';
        $data['age'] = '<b>22</b>';
        return view('demo', $data);*/
        //-----第三種
        // $name = '彥彰';
        // $age = '<b>22</b>';
        return view('test.demo2');
    }
    public function demo3(Request $request)
    {
        //dd($request->all());//取得全部資料
        //dd($request->except('x')); //取得. 之外資料
        //dd($request->only(['x', 'y'])); //只取得. 資料
        //dd($request->input('x', 'x100')); //取得輸入資料
        dd($request->y);
        return view('test.demo3');
    }

}