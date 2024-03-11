<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
       return view('users.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ]);

    $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
    ]);

    $user->save();

    return redirect()->route('index')->with('sucesso', 'Usuário criado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
    $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'sometimes|min:8',
    ]);

    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $request->input('password') ? bcrypt($request->input('password')) : $user->password,
    ]);

    return redirect()->route('index')->with('sucesso', 'Usuário atualizado!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('index')->with('sucesso', 'Usuário excluido!');
    }
}
