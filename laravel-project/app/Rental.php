<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    // `Item.php`でItemからRentalへの１対多リレーションを定義した。
    // そのため、その逆向きであるRentalからItemへの定義も行う。
    public function item() {
        return $this->belongsTo('App\Item');
    }
}
