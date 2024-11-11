<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function nominal(){
        return view("nominal");
    }

    public function index(){
        return view("index");
    }

    public function tambahNomor(){
        return view("tambahNomor");
    }
}
