<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Register API (POST, formdata)
     */
    public function register(Request $request){
        // Validation
        $validated = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:authors,email",
            "phone_no" => "required|string|max:20",
            "password" => "required|string|min:6|confirmed"
        ]);

        // Create Author
        $author = Author::create([
            "name" =>$request->name,
            "email" =>$request->email,
            "phone_no" =>$request->phone_no,
            "password" =>Hash::make($request->password),
        ]);

        // Response
        return response()->json([
            "status" => true,
            "message" => "Author created successfully!"
        ]);
    }

    /**
     * Login API (POST, formdata)
     */
    public function login(Request $request){

    }

    /**
     * Profile API (GET)
     */
    public function profile(){

    }

     /**
     * Logout API (POST)
     */
    public function logout(Request $request){

    }
}
