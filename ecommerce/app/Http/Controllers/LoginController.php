<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*DB::insert('INSERT INTO usuario (email, password) values (?, ?)', [
                'pepito',
                Hash::make('123456')
            ]);*/
        return view('login');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //REALIZAR VALIDACIONES QUE APRENDIMOS

        if(Auth::attempt([
            'email' => $request->post('usuario'),
            'password' => $request->post('contrasenia'),
        ])){
            $request->session()->regenerate();
            $request->session()->put('nro_telefono', '544475788796');

            return redirect()->intended(route('tecnicos.index'));
        }
        else {
            return back()->withErrors([
                'usuario' => 'El email/nombre de usuario no existe en la base de datos',
                'contrasenia' => 'La contraseña no coincide con el email/nombre de usuario proporcionado'
            ]);
            //NO COINCIDE NOMBRE DE USUARIO Y/O CONTRASEÑA
        }
    }

    public function destroy(Request $request)
    {
        $request->session()->invalidate();
        return redirect(route('login.index'));
    }
}
