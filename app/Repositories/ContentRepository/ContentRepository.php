<?php
namespace App\Repositories\ContentRepository;
use App\Repositories\BaseRepository;

class ContentRepository extends BaseRepository implements ContentRepositoryInterface
{
    public function getModel(){
        return \App\Models\Content::class;
    }
}