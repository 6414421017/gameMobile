<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_name',
        'game_detail',
        'game_price',
        'game_url_video',
        'game_img_logo',
        'game_img'
    ];
}
