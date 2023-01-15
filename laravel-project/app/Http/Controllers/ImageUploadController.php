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
    public function store($id, Request $request){
        $image = new Image;

        // アイテムidの取得
        // $image->item_id = $request->item_id;
        $image->item_id = $id;
        // パスの取得とファイルの保存
        $image_path = $request->file('image')->store('public/images/');
        $image->image_url = basename($image_path);

        $image->save();

        return response()->json([
            "image_url" => $image->image_url,
          ]);
    }

    public function upload(Request $request){
        $image_base64 = $request->input('image');

        // 画像名をランダムで作成
        $image_name = Str::random(20) . '.' . 'jpeg';

        // デコードする前に不要な文字列を置換する
        $image_base64 = str_replace('data:image/jpeg;base64,', '', $image_base64);
        $image_base64 = str_replace(' ', '+', $image_base64);
        $image = base64_decode($image_base64);

        return response()->json([
          "url" => $url,
        ]);
      }
}
