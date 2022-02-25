<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/brand/rr.jpg') }}">
    <script src="js/scrollreveal.js"></script>
    <script src="js/app.js"></script>

    <title>@yield('title') RIDERS REPUBLIC </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/brand/rr.jpg') }}" alt="logo"
                    width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('register.index') }}">Registrase</a>
                    <a class="nav-link" href="{{ route('login.index') }}">Inisiar Sesión</a>
                </div>
            </div>
        </div>
    </nav>
    <div style="min-height: 80vh;">
        <div>
            @yield('content')
        </div>
    </div>
    <div style="display:flex; flex-wrap: wrap; justify-content:space-between; align-items:center;"
        class="bg-dark p-1">
        <div>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-facebook-f text-light"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-twitter text-light"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-google text-light"></i></a>

            <a class="btn btn-outline-light btn-floating m-1 text-light" href="#!" role="button"><i
                    class="fab fa-instagram"></i></a>
            <div class="p-1 text-light">
                <p>¡Visita nuestras redes sociales!</p>
            </div>
        </div>
        <div class="p-1 text-light">
            <p>RIDERS REPUBLIC© Todos los derechos reservados.</p>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>


<script src="js/scrollreveal.js"></script>
<script src="js/app.js"></script>

</html>
