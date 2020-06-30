<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function welcome(Request $request) {
        return view('welcome1');
    }

    public function welcome_post(Request $request) {
        $ndepan = $request['ndepan'];
        $nbelakang = $request['nbelakang'];
        echo "<h2>Selamat Datang $ndepan $nbelakang!</h2>";
        echo "Terima kasih telah bergabung di SanberBook. Social Media kita bersama!";
    }
};
