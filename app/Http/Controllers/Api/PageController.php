<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\page_validate;
use Illuminate\Http\Request;
use App\Repositories\PageRepository\PageRepositoryInterface;

class PageController extends Controller
{
    protected $pageRepo;

    public function __construct(PageRepositoryInterface $pageRepo)
    {
        $this->pageRepo=$pageRepo;
    }
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page=$this->pageRepo->index();
        foreach($page as $pa){
            $pa['content']=$pa->content;
        }
        return $page;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(page_validate $request)
    {
        $input=$request->all();
        // unset($input['_token']);
        $this->pageRepo->store($input);
        $mess='1';
        return $mess;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page=$this->pageRepo->show($id);
        $page['content']=$page->content;
        return $page;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(page_validate $request, string $id)
    {
        $input=$request->all();
        $this->pageRepo->update($input,$id);
        $mess='1';
        return $mess;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->pageRepo->destroy($id);
        $mess='1';
        return $mess;
        //
    }
}
