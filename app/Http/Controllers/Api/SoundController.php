<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sound;

class SoundController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sound=Sound::all();
        return $sound;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        // unset($input['_token']);
        Sound::create($input);
        $mess='1';
        return $mess;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $sound=Sound::find($id);
        return $sound;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sound=Sound::find($id);
        $input=$request->all();
        $sound->update($input);
        $mess='1';
        return $mess;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sound = Sound::findOrFail($id);
        $sound->delete();
        $mess='1';
        return $mess;
        //
    }
}
