<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::with('roles')
            ->latest()
            ->get();

        return view('users.index', compact('users'));
    }
}