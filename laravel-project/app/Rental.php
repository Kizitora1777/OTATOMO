<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    // `User.php`でUserからRentalへの１対多リレーションを定義した。
    // そのため、その逆向きであるRentalからUserへの定義も行う。
    public function user() {
        return $this->belongsTo('App\User');
    }

    // `Item.php`でItemからRentalへの１対多リレーションを定義した。
    // そのため、その逆向きであるRentalからItemへの定義も行う。
    public function item() {
        return $this->belongsTo('App\Item');
    }
}
