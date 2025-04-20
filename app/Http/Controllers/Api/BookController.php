<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

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
        $author_id = auth()->user()->id;

        $books = Author::find($author_id)->books;

        if(!empty($books)){
            return response()->json([
                "status" => true,
                "message" => "Books found",
                "data" => $books
            ]);
        }

        return response()->json([
            "status" => false,
            "message" => "No book found"
        ]);
    }

    /**
     * Delete Book API (DELETE)
     */
    public function deleteBook($bookId){
        $author_id = auth()->user()->id;
        
        if(Book::where(["id" =>$bookId, "author_id" => $author_id])->exists()){
            
            $book = Book::where([
                "id" =>$bookId, 
                "author_id" => $author_id
            ])->first();

            $book->delete();
            
            return response()->json([
                "status" => true,
                "message" => "Book deleted!"
            ]);

        };

        return response()->json([
            "status" => false,
            "message" => "Book not found"
        ]);
    }
}
