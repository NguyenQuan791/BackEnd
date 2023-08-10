<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table="book";
    protected $fillable=[
        'bookName',
        'writer',
        'illstrator',
        'bookCover'
    ];

    public function pages()
    {
        return $this->hasMany(Page::class,'bookId','id');
    }

    protected $hidden = ['id','created_at','updated_at'];

}
