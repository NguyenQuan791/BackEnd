<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table="pagecontent";
    protected $fillable=[
        'pageId',
        'soundId',
        'textContent',
        'locationX',
        'locationY',
        'width',
        'height',
    ];

    public function sound()
    {
        return $this->hasOne(Sound::class,'id','soundId');
    }
}
