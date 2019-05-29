<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
    
        $book = Book::create([
            'book_title' => $request->book_title,
            'book_imgage'=> $request->book_image,
          ]);
          $result = array('status'=>'successful');
        return response()->json(($result));
    }
}
