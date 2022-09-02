<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.list', ['usuarios' => $usuarios]);
    }
    public function createPage()
    {
        return view('usuarios.create');
    }
    public function store(Request $request)
    {

        $usuario = new Usuario;
        $usuario->name = $request->name;
        $usuario->email = $request->email;

        $usuario->save();


        return redirect(('/home'));
    }
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);

        return view('usuarios.edit', ['usuario' => $usuario]);
    }
    public function update(Request $request)
    {
        $data = $request->all();
        Usuario::findOrFail($request->id)->update($data);
        return redirect('/users');
    }
    public function destroy($id)
    {
        Usuario::findOrFail($id)->delete();
        return redirect('/users');
    }
}
