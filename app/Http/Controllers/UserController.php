<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view( 'user-overview', [
            'users' => User::all(),
        ] );
    }

    public function edit($id)
    {
        return view( 'user-detail', [
            'user' => User::find( $id ),
        ] );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find( $id );
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/user');
    }
}
