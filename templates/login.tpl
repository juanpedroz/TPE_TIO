<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Página de Inicio</title>
</head>
<body>
<header class="bg-dark text-white py-3">
<div class="container">
    <h1 class="text-center">Bienvenido </h1>
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="router.php?action=home">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="router.php?action=pedidos">pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="router.php?action=products">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="router.php?action=login">Login</a>
            </li>  
        </ul>
    </nav>
</div>
</header>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Iniciar Sesión</h2>
        <form action="router.php?action=verify" method="POST">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <a class="btn btn-danger" href="router.php?action=login">Logout</a>
        </form>
    </div>

</body>
</html>