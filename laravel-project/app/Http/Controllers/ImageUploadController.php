<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

use App\Http\Requests\ItemRequest;

class ImageUploadController extends Controller
{
    public function index(){
        //$items = コントローラ::all();
        // return view('items.index', ['items' => $items]);
        return view('index');
    }

    public function store(ItemRequest $request){
        // // 保存するファイルの名前を設定
        // $file_name = $request->file('file')->getClientOriginalName();
        // // ファイルに名前をつけて保存
        // $request->file('file')->storeAs('public',$file_name);
       
        // アップロードされたファイルの取得
        $image = $request->file('file');
        // ファイルの保存とパスの取得
        $path = isset($image) ? $image->store('images','public') : '';
        error_log ($path);
        //画像をデータベースに登録
        // Image::create([
        //     'image_url' => $path,
        // ]);
        Image::insert([
            'image_url' => 'AAA.png',
        ]);
        return redirect()->route('upload.index');

    }
}
