<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository\BookRepositoryInterface;
use App\Http\Requests\book_validate;

class BookController extends Controller
{
    protected $bookRepo;

    public function __construct(BookRepositoryInterface $bookRepo)
    {
        $this->bookRepo = $bookRepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book=$this->bookRepo->index();
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
    public function store(book_validate $request)
    {
        $input=$request->all();
        // unset($input['_token']);
        if(empty($input['bookCover'])){
            $input['bookCover']='...';
        }
        $this->bookRepo->store($input);
        return redirect('book');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(string $id)
    {
        $book=$this->bookRepo->show($id);
        $page=$book->pages;
        return view('book.show',compact('book','page'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $id)
    {
        $book=$this->bookRepo->show($id);
        return view('book.edit',compact('book'));
        //
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(book_validate $request, string $id)
    {
        $input=$request->all();
        if(empty($input['bookCover'])){
            $input['bookCover']='...';
        }
        $book=$this->bookRepo->update($input, $id);
        $mess='1';
        return redirect('book');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        $this->bookRepo->destroy($id);
        return redirect('book');
    }
}
