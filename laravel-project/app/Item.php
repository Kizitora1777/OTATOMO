<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // ItemからRentalへの１対多リレーションを定義する
    public function rentals() {
        // Laravelの機能により、Rentalモデルの外部キーを「item_id」と想定する。
        return $this->hasMany('App\Rental');
    }

    // Itemからimageへの１対多リレーションを定義する
    public function images() {
        // Laravelの機能により、Rentalモデルの外部キーを「item_id」と想定する。
        return $this->hasMany('App\image');
    }

    // `User.php`でUserからItemsへの１対多リレーションを定義した。
    // そのため、その逆向きであるItemからUserへの定義も行う。
    public function user() {
        return $this->belongsTo('App\User');
    }
}
