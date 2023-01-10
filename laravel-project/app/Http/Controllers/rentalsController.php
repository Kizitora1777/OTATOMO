<?php

namespace App\Http\Controllers;

use App\Rental;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    // 貸し借り機能 POST /rentals
    public function createRental(Request $request)
    {
        $rental = new Rental;

        $rental->user_id = $request->user()->id;
        $rental->item_id = $request->item_id;
        $rental->start_date = $request->start_date;
        $rental->end_date = $request->end_date;
        $rental->state = $request->state;
        $rental->is_matching = $request->is_matching;

        $rental->save();

        return response()->json(
            $rental
        );
    }

    // 貸し借り詳細 GET /rentals/renatalID
    public function showRental($id)
    {
        $rental = Rental::find($id);
        return response()->json(
            $rental
        );
    }

    public function getUserRentals(Request $request){
        $rentals = [];
        foreach ($request->user()->rentals as $rental){
            $rental['user_name'] = $request->user()->name;
            $rental['item'] = $rental->item;
            $rental['item']['images'] = $rental->item->images;
            $rentals[] = $rental;
        }
        return response()->json(
            $rentals
        );
    }

    public function getUserItemsRentals(Request $request){
        $rentals = [];
        foreach ($request->user()->items as $item){
            foreach ($item->rentals as $rental) {
                $rental['user_name'] = $request->user()->name;
                $rental['item'] = $rental->item;
                $rental['item']['images'] = $rental->item->images;
                $rentals[] = $rental;
            }
        }
        return response()->json(
            $rentals
        );
    }
}
