@extends('home')

@section('title', 'Iniciar Sesión')

@section('content')
    <div style="padding: 20px;">
        <div style="display:flex; justify-content:center;">
            <div
                style="background-color:white;padding: 5px;border-radius: 15px;border-color: white; width:500px;box-shadow: 10px 10px 10px 0px #26262754;">
                <h4>INISIAR SESIÓN</h4>
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="userloginemail" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">No compartas tu correo con desconocidos.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="userloginrememberoption"
                            id="userloginrememberoption">
                        <label class="form-check-label" for="userloginrememberoption">Recordarme</label>
                    </div>
                    @error('message')
                        <div class="alert alert-danger" role="alert">
                            Credenciales invalidas.
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-dark">INICIAR SESIÓN</button>
                </form>
                <div>
                    <span>¿No tienes cuenta? Registrate </span><a style="text-decoration: none;"
                        href="{{ route('register.index') }}">aquí.</a>
                </div>

            </div>
        </div>
    </div>
@endsection
