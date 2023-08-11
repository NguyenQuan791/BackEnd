<?php
namespace App\repositories\SoundRepository;
use App\Repositories\BaseRepository;

class SoundRepository extends BaseRepository implements SoundRepositoryInterface
{
    public function getModel(){
        return \App\Models\Sound::class;
    }
}