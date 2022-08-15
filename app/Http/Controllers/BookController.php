<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$books=Book::latest()->paginate(3);
        $books=Book::all();
        return view('books.index',compact('books'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            "title"=>'required|max:20',
            "author"=>'required|max:20',
            "pub_year" =>'required',
            'plot'=>'max:120'
        ]);

        //create a new book
        Book::create($request->all());

        //redirect the user and send a friendly msg
        return redirect()->route('books.index')->with('success','Book added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=Book::findOrFail($id);
        return View('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::findOrFail($id); 
        return View('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData=$request->validate([
            "title"=>'required|max:20',
            "author"=>'required|max:20',
            "pub_year" =>'required',
            'plot'=>'max:120'
        ]);
        Book::whereId($id)->update($validateData);

        return redirect('/books')->with('success','Book Data was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('success','Book was deleted successfully');
    }
}
