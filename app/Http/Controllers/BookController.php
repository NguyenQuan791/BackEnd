<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book=Book::all();
        // dd($book);
        return view('book.index',compact('book'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        // unset($input['_token']);
        $input['bookCover']='...';
        Book::create($input);
        $mess='1';
        return redirect('book?mess='.$mess);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book=Book::find($id);
        $page=$book->pages;
        // dd($page);
        return view('book.show',compact('book','page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=Book::find($id);
        return view('book.edit',compact('book'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book=Book::find($id);
        $input=$request->all();
        // unset($input['_token']);
        // dd($input);
        // $input['bookCover']='...';
        $book->update($input);
        $mess='1';
        return redirect('book?mess='.$mess);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);

        $book->delete();
        $mess='1';
        return redirect('book?mess='.$mess);
    }
}
