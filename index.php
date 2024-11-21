<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Css/prefix.css">
    <title>Demo Walker</title>
</head>
<body>
    <div id="banner">
        <div id="bannerContent">
            <?php include 'Php/Hacks/nav.php'; ?>
            <div id="bannerText">
                <h1>BOTAS CALZADO Y CALIDAD</h1>
                <p>dama, caballero, uso rudo y más</p>
            </div>
        </div>
        <video id="videoBanner" autoplay loop muted>
            <source src="Video/bannerVideo.mp4">
        </video>
    </div>
    <main>
        <div class="section">
            <div class="sectionHeader">
                <p class="subTitle">Productos Destacados</p>
                <div>
                    <i class="fa-solid fa-chevron-left"></i>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="rowArts">
                <?php include 'Php/Producto/importAll.php'; ?>
            </div>
        </div>

    </main>
    <script src="https://kit.fontawesome.com/5049a1cee4.js" crossorigin="anonymous"></script>
</body>
</html>