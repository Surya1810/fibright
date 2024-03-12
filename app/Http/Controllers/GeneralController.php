<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function news($id)
    {
        if ($id == 1) {
            return view('news.1');
        } else if ($id == 2) {
            return view('news.2');
        } else {
            return view('news.3');
        }
    }

    public function purchase()
    {
    }
}
