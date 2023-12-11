<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //front
    public function index(){

        return view('index');
    }
    public function genre(){
        return view('genre');
    }
    public function review(){
        return view('review');
    }
    public function login(){
        return view('login');
    }
    //admin
    public function AdminAdd(){
        return view('admin.add');
    }
    public function AdminEdit(){
        return view('admin.edit');
    }
    public function AdminFilm(){
        return view('admin.film');
    }
    public function AdminReview(){
        return view('admin.review');
    }
    public function AdminUser(){
        return view('admin.user');
    }
    //user
    public function UserDashboard(){
        return view('user.dashboard');
    }
    public function UserEdit(){
        return view('user.edit');
    }
    public function UserGenre(){
        return view('user.genre');
    }
    public function UserHome(){
        return view('user.home');
    }
    public function UserReview(){
        return view('user.review');
    }
}
