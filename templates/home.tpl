<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clivet Rauch - Veterinaria</title>
   <!-- <link rel="stylesheet" href="../css/styles.css">  Enlace al archivo CSS -->
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

.header {
    background-color: #5a8f7b;
    color: white;
    text-align: center;
    padding: 20px;
}

.header h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
}

.header p {
    font-size: 1.2em;
    margin-bottom: 15px;
}

.nav a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
    font-weight: bold;
}

.main-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.intro {
    text-align: center;
    margin-bottom: 30px;
}

.intro h2 {
    font-size: 2em;
    color: #5a8f7b;
}

.features {
    display: flex;
    justify-content: space-around;
    gap: 20px;
}

.feature {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 30%;
}

.feature h3 {
    color: #5a8f7b;
    margin-bottom: 10px;
}

.button {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    color: white;
    background-color: #5a8f7b;
    text-decoration: none;
    border-radius: 5px;
}

.button:hover {
    background-color: #477563;
}

.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 20px;
}
</style>
<body>
    <!-- Encabezado -->
    <header class="header">
        <h1>Bienvenidos a Clivet Rauch</h1>
        <p>Tu veterinaria de confianza</p>
        <nav class="nav">
            <a href="login.php">Iniciar Sesión</a>
            <a href="productos.php">Productos</a>
            <a href="pedidos.php">Pedidos</a>
        </nav>
    </header>

    <!-- Sección principal -->
    <main class="main-content">
        <section class="intro">
            <h2>Servicios y Productos para el Cuidado de tus Mascotas</h2>
            <p>Encuentra los mejores productos para la salud y felicidad de tus mascotas.</p>
        </section>

        <section class="features">
            <div class="feature">
                <h3>Accede a tu cuenta</h3>
                <p>Inicia sesión para acceder a tu perfil, ver tus pedidos y gestionar tus datos.</p>
                <a href="login.php" class="button">Iniciar Sesión</a>
            </div>
            <div class="feature">
                <h3>Explora Nuestros Productos</h3>
                <p>Revisa nuestra selección de alimentos, juguetes y productos de cuidado.</p>
                <a href="productos.php" class="button">Ver Productos</a>
            </div>
            <div class="feature">
                <h3>Consulta tus Pedidos</h3>
                <p>Consulta el estado de tus pedidos anteriores y realiza nuevas compras.</p>
                <a href="pedidos.php" class="button">Ver Pedidos</a>
            </div>
        </section>
    </main>

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy; 2024 Clivet Rauch. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
