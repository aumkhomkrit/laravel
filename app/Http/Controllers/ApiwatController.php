<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiwatController extends Controller
{
    public function index(){
        $message = "เฮ้ เฮ้ !!! วู้";
        return view('apiwat56.index', compact('message'));
    }
}
