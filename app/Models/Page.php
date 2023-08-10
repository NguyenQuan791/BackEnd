<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table="bookpage";
    protected $fillable=[
        'pageNumber',
        'backgroud',
    ];
    public function content()
    {
        return $this->hasMany(Content::class,'pageId','id');
    }
}
