<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function add(Request $req){
        $book = new Book;
        $book->title = $req->title;
        $book->author = $req->author;
        $book->availability = TRUE;
        $book->save();
        return back();
    }
    public function all(){
        $books = Book::all();
        return $books;
    }
    public function delete($id){
        $book=Book::destroy($id);
    }
    public function changeAvailabilty($id){
        $book = new Book;
        $book = Book::find($id);
        $book->availability = !$book->availability;
        $book->save();
    }
}
