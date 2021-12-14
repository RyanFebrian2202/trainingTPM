<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getCreatePage(){
        return view('create');
    }

    public function createBook(Request $request){
        Book::create([
            'title' =>  $request->title,
            'author' =>  $request->author,
            'release' =>  $request->release,
            'price' =>  $request->price,
        ]);

        return redirect(route('getCreatePage'));
    }

    public function getBook(){
        $books = Book::all();
        return view('view', ['books'=>$books]);
    }

    public function getBookById($id){
        $book = Book::find($id);
        return view('update', ['updatebook' => $book]);
    }

    public function updateBook(Request $request, $id) {
        $book = Book::find($id);

        //Cara Pertama
        // $book -> title = $request -> title;
        // $book -> author = $request -> author;
        // $book -> release = $request -> release;
        // $book -> price = $request -> price;

        // $book -> save();

        //Cara Kedua
        $book -> update([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getBook'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getBook'));
    }
}
