<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table="account";
    protected $fillable=[
        'userId',
        'accountName',
        'password',
        'coin'
    ];

    public function pages()
    {
        return $this->hasMany(Page::class,'bookId','id');
    }

    protected $hidden = ['id','created_at','updated_at'];

}
