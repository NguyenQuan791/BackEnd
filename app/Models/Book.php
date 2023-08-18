<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Book extends Model
{
    use HasFactory,LogsActivity;
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
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name', 'text']);
        // Chain fluent methods for configuration options
    }

    protected $hidden = ['id','created_at','updated_at'];

}
