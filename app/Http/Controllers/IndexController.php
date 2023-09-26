<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function index()
    {

        return Inertia::render('Home', [
            'title' => 'Home',
        ]);
    }
}
