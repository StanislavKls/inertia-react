<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index()
    {
        Cache::put('key', 'value', $seconds = 10);
        return Inertia::render('Home', [
            'title' => 'Home',
        ]);
    }
}
