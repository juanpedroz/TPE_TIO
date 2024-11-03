<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Listado de Productos</title>
   <!-- <link rel="stylesheet" href="styles.css">  Asegúrate de enlazar tu CSS -->
</head>
<body>
<header class="bg-dark text-white text-center py-3">
<h1>Listado de Productos</h1>
</header>

<main class="container my-4">
{if $products|@count > 0}
    <div class="row">
        {foreach $products as $product}
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">{$product->nombre}</h3>
                        
                        <a class="btn btn-primary" href="router.php?action=details/{$product->ID_producto}">Detalles</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
{else}
    <div class="alert alert-warning" role="alert">
        No hay productos disponibles.
    </div>
{/if}
</main>

<footer class="bg-dark text-white text-center py-3">
<p>&copy; 2024 veterinaria</p>
</footer>
</body>
</html>
