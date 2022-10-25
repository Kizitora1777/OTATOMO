<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        // 保存するファイルの名前を設定
        $file_name = $request->file('file')->getClientOriginalName();
        // ファイルに名前をつけて保存
        $request->file('file')->storeAs('public',$file_name);
    }
}
