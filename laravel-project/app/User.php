<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // UserからItemへの１対多リレーションを定義する
    public function items() {
        // Laravelは外部キーの名前を自動的に決めている
        // 具体的には、自身のモデル名に「_id」と追記した名前を想定する
        // 今回の場合は、Itemモデルの外部キーを「user_id」とする。
        return $this->hasMany('App\Item');
    }

    // UserからRentalへの１対多リレーションを定義する
    public function rentals() {
        // Laravelの機能により、Rentalモデルの外部キーを「user_id」と想定する。
        return $this->hasMany('App\Rental');
    }
}
