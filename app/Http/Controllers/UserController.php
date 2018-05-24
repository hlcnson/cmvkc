<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;

use App\User;
use Auth;
//Sử dụng laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// Sử dụng session để ghi thông điệp
use Session;

class UserController extends Controller
{
    public function __construct() {
        // isAdmin là middleware chỉ cho phép user có permission phù hợp được truy cập controller
        //isAdmin middleware lets only users with a //specific permission permission to access these resources
        $this->middleware(['auth', 'isAdmin']); 
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // PHƯƠNG THỨC HIỂN THỊ DANH MỤC USER
        // Get all users and pass it to the view
        $users = User::all(); 
        return view('backend.user.list')->with('users', $users);
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
