<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create ()
    {
        return view('auth.register');
    }

    public function store(){
        $user = new User();

        $user -> create(request([
            'username',
            'email',
            'password',
            'nombre',
            'primer_apellido',
            'segundo_apellido',
            'telefono',
            'direccion'
        ]
        ));

        auth() -> login($user);
        return redirect() -> to('/');
    }
}
