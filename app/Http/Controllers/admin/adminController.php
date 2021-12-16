<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pageTitle = "profile";

        $posts = auth()->user();


        
        //dd($posts);

        return view('admin.profile', compact('posts', 'pageTitle'));
         
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
         $user = Auth::user();
        /**
     * Validate request/input 
     **/
    $this->validate($request, [
        'name' => 'required|max:255|unique:users,name,'.$user->id,
        'email' => 'required|email|max:255|unique:users,email,'.$user->id,
    ]);

    /**
     * storing the input fields name & email in variable $input
     * type array
     **/
    $input = $request->only('name','email');



    /**
     * Accessing the update method and passing in $input array of data
     **/
    $user->update($input);

    /**
     * after everything is done return them pack to /profile/ uri
     **/
    return back();
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
