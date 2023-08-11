<?php
namespace App\repositories\PageRepository;
use App\Repositories\BaseRepository;

class PageRepository extends BaseRepository implements PageRepositoryInterface
{
    public function getModel(){
        return \App\Models\Page::class;
    }
}