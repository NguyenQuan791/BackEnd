<?php
namespace App\Repositories\BookRepository;

use App\Repositories\BaseRepository;

class BookRepository extends BaseRepository implements BookRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Book::class;
    }
}