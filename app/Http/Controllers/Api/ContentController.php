<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ContentRepository\ContentrepositoryInterface;

class ContentController extends Controller
{
    protected $contentRepo;

    public function __construct(ContentrepositoryInterface $contentRepo)
    {
        $this->contentRepo=$contentRepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content=$this->contentRepo->index();
        foreach($content as $co){
            $co['sound']=$co->sound;
        }
        return $content;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $this->contentRepo->store($input);
        $mess='1';
        return $mess;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $content=$this->contentRepo->show($id);
        $conten['sound']=$content->sound;
        return $content;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input=$request->all();
        $this->contentRepo->update($input, $id);
        $mess='1';
        return $mess;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->contentRepo->destroy($id);
        $mess='1';
        return $mess;
    }
}
