<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->Home = new Home();
    }

    public function home(){
        $data = [
            'homes' => $this->Home->allData(),
        ];

        return view ('home', $data);
    }
}
