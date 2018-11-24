<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use App\Blog;


class BlogControler extends Controller
{
    public function index()
    {
    	$blog = Blog::all();

    	dd($blog);

    	return view('blog/home');

    }

    public function show($id)
   {
   	$nilai = 'ini adalah link nya'; 

   	$users = DB::table('users')->get();

   	$unescaped = '<script> alert("x!")</script>';






   	return view('blog/single', ['blog' => $nilai, 'users' => $users, 'unescaped' => $unescaped]);
   }
}
