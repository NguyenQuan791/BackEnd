<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content=Content::all();
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
        Content::create($input);
        $mess='1';
        return $mess;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $content=Content::find($id);
        $conten['sound']=$content->sound;
        return $content;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $content=Content::find($id);
        $input=$request->all();
        $content->update($input);
        $mess='1';
        return $mess;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $content = Content::findOrFail($id);

        $content->delete();
        $mess='1';
        return $mess;
    }
}
