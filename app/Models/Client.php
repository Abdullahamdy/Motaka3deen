<?php

namespace App\Models;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Client extends Authenticatable
{
    use  Notifiable;

    protected $guarded = [];
    protected $hidden = [
        'password'
    ];

}
