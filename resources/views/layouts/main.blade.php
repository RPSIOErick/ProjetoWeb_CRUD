<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div class="card w-75 d-flex justify-content-center" id="MainContent">
    <div class="card-body">

        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container-fluid" id="NavbarContent">
            <a class="navbar-brand" href="/">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Cadastrar</a>
                <a class="nav-link" href="/consulta">Consultar</a>
            </div>
            </div>
        </div>
        </nav>        
        

        <div class="container" id="Main">

            @yield('content')

        </div>
    </div>
    </div>


    </div>

</body>
</html>