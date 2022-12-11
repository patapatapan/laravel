<?php

namespace App\Http\Controllers;

use App\Models\Cgy;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CgyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$cgies = Cgy::where('id', '>', 50)->where('id', '<=', 80)->orderBy('updated_at', 'desc')->get();
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2020-12-08 12:00:00');
        $cgies = Cgy::where('enabled_at', '>', $date)->get();
        return $cgies;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cgy $cgy)
    {
        //
        //$cgy = Cgy::find($id); //找到會顯示資料
        //$cgy = Cgy::findorFail($id); //找不到會顯示404
        //$cgy = Cgy::where('id', $id); //僅拼接SQL語句 不會顯示 報錯
        //$cgy = Cgy::orderBy('created_at', 'desc')->where('id', $id)->first(); //SQL拼接順序不影響
        //$cgy = Cgy::where('id', $id)->first();
        //dd($cgy);
        return $cgy;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cgy $cgy)
    {
        //
        $cgy->delete();
    }
}