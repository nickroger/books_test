<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class ApiController extends Controller
{
    public function getAllBooks() {
        $books = Books::get()->toJson(JSON_PRETTY_PRINT);
        return response($books, 200);
    }

    public function createBook(Request $request) {
        $book = new Bookds;
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->total_pages = $request->total_pages;
        $book->author = $request->author;
        $book->rating = $request->rating;
        $book->published_date = $request->published_date;
        $book->save();    
        return response()->json([
            "message" => "Book record created"
        ], 201);
    }

    public function getBook($id) {
      // logic to get a Book record goes here
    }

    public function updateBook(Request $request, $id) {
      // logic to update a Book record goes here
    }

    public function deleteBook ($id) {
      // logic to delete a Book record goes here
    }
}
