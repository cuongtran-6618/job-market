<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::where('active', true)->get();
        return view('users.index', compact('users'));
    }

    public function create(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|max:255',
            'name' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('user.index')
            ->with('success', 'User created successfully.');
    }

    public function delete(User $user)
    {
        // reload to make sure that is a matching user
        /** @var User|null $reloadUser */
        $reloadUser = User::find($user->getOriginal('id')); //

        if ($reloadUser === null) {
            throw new Exception('User not found');
        }

        // soft delete customer
        $reloadUser->softDeletes();

        return redirect()->route('user.index')
            ->with('success', 'User deleted successfully.');
    }

    public function register(Request $request): View
    {
        return view("users.register");
    }

    public function login(Request $request)
    {
        return view("users.login");
    }
}
