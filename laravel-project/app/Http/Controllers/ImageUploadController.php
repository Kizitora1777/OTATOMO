<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    // DBに保存したファイル名を取得
    public function index(){
        $images = Image::all();

        return view('index',compact('images'));
    }

    // 画像を保存
    public function store(Request $request){
        $image = new Image;

        // アイテムidの取得
        // $image->item_id = $request->item_id;
        $image->item_id = '1';
        // パスの取得とファイルの保存
        $image_path = $request->file('image')->store('public/');
        $image->image_url = basename($image_path);

        $image->save();
        
        return redirect('/upload');
    }
}
