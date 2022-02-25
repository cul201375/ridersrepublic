@extends('home')

@section('title', 'Registrarse')

@section('content')

    <div style="padding: 20px;">
        <div style="text-align: center; padding: 5px;">
            <h4>REGISTRAR NUEVO USUARIO</h4>
        </div>

        <div style="display:flex; justify-content:center;">
            <div style="background-color: 
                white;padding: 5px;border-radius: 15px;border-color: white; width: 500px; box-shadow: 10px 10px 10px 0px #26262754">
                <form action="{{route('register.store')}}" method="POST">
                    @csrf
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Aqui va tu usuario">
                        <label for="username">Nombre de Usuario</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Aqui va tu email">
                        <label for="email">Correo</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Aqui va tu contraseña">
                        <label for="password">Contraseña</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Aqui va tu nombre">
                        <label for="nombre">Nombre completo</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
                            placeholder="Aqui va tu prim apellido">
                        <label for="primer_apellido">Primer apellido</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
                            placeholder="Aqui va tu seg apellido">
                        <label for="segundo_apellido">Segundo apellido</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Aqui va tu DPI">
                        <label for="telefono">Telefono</label>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="direccion" name="direccion"
                            placeholder="Aqui va tu correo">
                        <label for="direccion">Direccion</label>
                    </div>

                    <button type="submit" class="btn btn-dark mb-1">REGISTRAR NUEVO USUARIO</button>
                </form>
            </div>
        </div>
    </div>

@endsection
