<?php

namespace App\Http\Controllers;

use App\User;
use App\Item;
use App\Image;
use App\Rental;

use Illuminate\Http\Request;

class DebugDtabasesController extends Controller
{
    public function index()
    {
        $all_users = User::all();
        $all_items = Item::all();
        $all_images = Image::all();
        $all_rentals = Rental::all();

        // User has many items のチェック：
        // id=1のUserが持っているItem情報を表示する
        // User::find(1)->itemsの'items'はLaravelの動的プロパティにより提供される。
        $debug1 = User::find(1)->items;

        // User has many Rentals のチェック：
        $debug2 = User::find(1)->rentals;

        // Item has many Rentals のチェック：
        $debug3 = Item::find(1)->rentals;

        // Item has many images のチェック：
        $debug4 = Item::find(1)->images;

        // Items belong to User のチェック：
        // id=1のItemのUser情報を表示する
        // 'user'はlaravelの動的プロパティにより提供される。
        $debug5 = Item::find(1)->user;

        // Rentals belong to User のチェック：
        $debug6 = Rental::find(1)->user;

        // Rentals belong to Item のチェック：
        $debug7 = Rental::find(1)->item;

         // Images belong to Item のチェック：
         $debug8 = Image::find(1)->item;

        return view('debug/databases/index', [
            'all_users' => $all_users,
            'all_items' => $all_items,
            'all_images' => $all_images,
            'all_rentals' => $all_rentals,
            'debug' => $debug8,
        ]);
    }
}