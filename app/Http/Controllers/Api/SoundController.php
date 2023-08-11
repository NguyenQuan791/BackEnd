<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SoundRepository\SoundRepositoryInterface;

class SoundController extends Controller
{
    protected $soundRepo;

    public function __construct(SoundRepositoryInterface $soundRepo)
    {
        $this->soundRepo=$soundRepo;
    }
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Sound=$this->soundRepo->index();
        return $Sound;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        // unset($input['_token']);
        $this->soundRepo->store($input);
        $mess='1';
        return $mess;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Sound=$this->soundRepo->show($id);
        $Sound['content']=$Sound->content;
        return $Sound;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input=$request->all();
        $this->soundRepo->update($input,$id);
        $mess='1';
        return $mess;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->soundRepo->destroy($id);
        $mess='1';
        return $mess;
        //
    }
}
