<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Create Book API (POST, formdata)
     */
    public function saveBook(Request $request){
        // validation
        $validation = $request->validate([
            "title" => 'required'
        ]);

        $author_id = auth()->user()->id;

        // create book
        $book = Book::create([
            "author_id" => $author_id,
            "title" => $request->title,
            "description" => $request->description,
            "book_cost" => $request->book_cost
        ]);

        return response()->json([
            "status" => true,
            "message" => "Book Created Successfully!",
            "date" => $book
        ]);

    }

    /**
     * List Book API (GET)
     */
    public function listBooks(){

    }

    /**
     * Delete Book API (DELETE)
     */
    public function deleteBook($bookId){

    }
}
