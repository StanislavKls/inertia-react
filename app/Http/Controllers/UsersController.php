<?php

declare(strict_types= 1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Cache;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('admin/Users', [
            'title' => 'Пользователи',
            'users' => User::all(),
        ]);
    }
    public function show(int $id)
    {
        $user = Cache::remember('user_' . $id, 600, fn() => User::findOrFail($id));

        return Inertia::render('admin/ShowUser', [
            'title' => 'Пользователь',
            'user' => $user,
        ]);
    }
}
