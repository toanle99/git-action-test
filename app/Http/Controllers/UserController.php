<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('admin.user.index');
    } 

    public function register() { 
        return view('admin.user.register'); 
    }

    public function login() {
        if (isset($_POST) && isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            User::where('email', $email)->where('password', $password);
            return view();
        }
        return view('admin.user.index');
    } 
    
    public function frofile() { 
        if (isset($_POST['id'])) {
            // return view('');
        }
    }

    


}
