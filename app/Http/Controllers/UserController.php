<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        return User::create(request()->all());
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function update(Request $request, User $user)
    {
        return $user->save();
    }

    public function destroy(User $user)
    {
        return $user->delete();
    }
}
