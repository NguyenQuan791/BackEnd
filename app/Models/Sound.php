<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    use HasFactory;
    protected $table="sound";
    protected $fillable=[
        'soundName',
        'sound',
    ];

    protected $hidden = ['id','created_at','updated_at'];
}
