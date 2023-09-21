<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $users = User::all();
    return response()->json($users);
}

    public function show(Request $request)
    {
        $user = User::find($request->id);
        if ($user == null) {
            return response() ->json([
                'error' => 'User not found'
            ], 404);
        }

    }

    public function store (Request $request)
    {
        $user = User::create([
            "name" => $request['name'],
            "email" => $request['email'],
            "password" =>$request['password'],
        ]);
        if ($user ==null){
            return response() ->json([
                "error" => "Ocurrio un error al guardar el registro"
            ], 500);
        }
        return response()->json([
            "mensaje" => "El registro se guardo con exito"
        ]);
    }

    public function update (Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->update ([
            'name' => $request->name,
        ]);

        return response() ->json([
            "mensaje" => 'Usuario actualizado correctamente'
        ]);
    }

}
