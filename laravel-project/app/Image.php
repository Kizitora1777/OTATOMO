<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['id','item_id','image_url','created_at','upload_at'];
    // `Item.php`でItemからImageへの１対多リレーションを定義した。
    // そのため、その逆向きであるImageからItemへの定義も行う。
    public function item() {
        return $this->belongsTo('App\item');
    }
}
