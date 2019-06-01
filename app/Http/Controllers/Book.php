<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->hasFile('imgs')){
            $file = $request->file('imgs');
            $fileNameWithExt = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $file->storeAs('public/images', $fileNameToStore);
                $cat_id=($request->cat_id)*1;
                $user_id=($request->user_id)*1;
                $book_type_id=($request->book_type_id)*1;
                $book = Books::create([
                'book_title' => $request->book_title,
                'author'=> $request->author,
                'book_image'=> $fileNameToStore,
                'description' => $request->description,
                'cat_id' => $cat_id,
                'user_id' => $user_id,
                'book_type_id' => $book_type_id ]);
        }
         //  if($request->hasFile('imgs')){
         //    $book_imageg = $request->file('imgs');
         //    $filename = time() . '.' . $book_imageg->getClientOriginalExtension();
         //    Image::make($book_imageg)->resize(300, 300)->save( public_path('public/images/' . $filename ) );

         //    // $book = Books::create([
         //    // 'book_title' => $request->book_title,
         //    // 'author'=> $request->author,
            // 'book_image'=> $filename,
         //    // 'description' => $request->description,
         //    // 'cat_id' => $request->cat_id,
         //    // 'user_id' => $request->user_id,
         //    // 'book_type_id' => $request->book_type_id,
         //  // ]);
         // }
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
