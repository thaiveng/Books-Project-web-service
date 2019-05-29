<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;

class UserController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->user_name);    
        // Log::info($request);
        // $request->validate([
        //     'user_name'=>'required',
        //     'email'=> 'required',
        //     'phone_number' => 'required',
        //     'password' => 'required',
        //     'user_type_id' => 'required' 
        //   ]);
        
        //dd($request->all());
        //   $user->save();
        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'password' => $request->password,
          ]);
          $result = array('status'=>'successful');
        return response()->json(($result));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::all();
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function login(Request $request)
    {
        $password = $request->password;
        $email = DB::table('users')->where('email', $request->email);
        // dd($email->get());
        foreach ($email->get() as $key) {
            if ($password == $key->password) {
                $result = array('status'=>'logedin');
                return response()->json(($result));
            }else{
                $result = array('status'=>'fail');
                return response()->json(($result));
            }
            // dd($key->password);
            
        }
    }
    
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
