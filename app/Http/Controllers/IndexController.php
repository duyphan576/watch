<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class IndexController extends Controller
{
    public function index(){
        return view('client.index.index');
    }
}
