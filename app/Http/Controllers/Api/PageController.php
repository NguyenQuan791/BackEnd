<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page=Page::all();
        foreach($page as $pa){
            $pa['content']=$pa->content;
        }
        return $page;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        // unset($input['_token']);
        Page::create($input);
        $mess='1';
        return $mess;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page=Page::find($id);
        $page['content']=$page->content;
        return $page;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page=Page::find($id);
        $input=$request->all();
        $page->update($input);
        $mess='1';
        return $mess;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        $mess='1';
        return $mess;
        //
    }
}
