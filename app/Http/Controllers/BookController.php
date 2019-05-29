<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Books;


class BookController extends Controller
{
    public function post(Request $request)
    {
    
        $book = Books::create([
            'book_title' => $request->book_title,
            'author'=> $request->author,
            'description'=> $request->description,
          ]);
          $result = array('book'=>'uploaded');
        return response()->json(($result));
    }
}
