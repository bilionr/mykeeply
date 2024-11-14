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

    public function pilihTujuan(){
        return view("pilihTujuan");
    }

    public function tambahNomor(){
        return view("tambahNomor");
    }

    public function history(){
        return view("history");
    }
}
