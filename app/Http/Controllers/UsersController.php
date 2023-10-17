<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('admin/Users', [
            'title' => 'Пользователи',
            'users' => User::all(),
        ]);
    }
}
