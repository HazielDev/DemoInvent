<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/prefix.css">
    <link rel="stylesheet" href="Css/prod.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <?php include 'Php/Producto/getByGet.php'; ?>
    <title><?= $prod['Nombre']; ?></title>
</head>
<body>
    <?php include 'Php/Hacks/nav.php'; ?>
    <div id="contAlert" style="display: none;">
        <div id="alert">
            ¡Se compro el producto con exito!
        </div>
    </div>
    <main>
        <div class="prodColumn">
            <div class="prodImg" style="background-image: url(data:image/png;base64,<?= base64_encode($prod['Imagen_1']); ?>);"></div>
        </div>
        <div class="prodColumn">
            <p><?= $prod['Nombre']; ?></p>
            <p class="prodDesc"><?= $prod['Descripcion']; ?></p>
            <p class="prodDesc">$<?= $prod['precioPub']; ?></p>
            <button id="buyBtn">Comprar Producto</button>
        </div>
    </main>
    <script>
        let prodNombre = "<?= $prod['Nombre']; ?>";
        let prodId = "<?= $prod['Id']; ?>";
        let prodPrecio = "<?= $prod['Precio']; ?>";
    </script>
    <script src="https://kit.fontawesome.com/5049a1cee4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Js/prod.js"></script>
</body>
</html>