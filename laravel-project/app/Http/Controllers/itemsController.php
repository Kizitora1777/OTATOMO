<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class itemsController extends Controller
{
    // 物品一覧
    public function getAllItems()
    {
        $items = Item::all();
        return response()->json(
            $items
        );
    }

    // 物品登録
    public function createItem(Request $request)
    {
        $item = new Item;

        $item->user_id = $request->user_id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->collateral = $request->collateral;

        $item->save();

        return response()->json([
            "message" => "item record created"
        ], 201);
    
    }

    // 物品詳細
    public function showItem($id)
    {
        $items = Item::find($id);
        return response()->json(
            $items
        );
    }

    // debug for POST /items
    // 物品登録のためのフォーム
    public function create()
    {
        return view('debug/item_create');
    }
}
