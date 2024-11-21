<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../Vars/default.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {die("Error al conectar a la base de datos: " . mysqli_connect_error());}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $idProd = $_POST['id'];
    $cant = 1;
    $nombreProd = $_POST['nombre'];
    $prodPrecio = $_POST['precio'];

    $descontMaterial = $conn->prepare("UPDATE Producto SET numStock = numStock - 1 WHERE id = ?");
    $descontMaterial->bind_param("i",$idProd);
    $descontMaterial->execute();

    date_default_timezone_set('America/Mexico_City');
    $fechaHora = date('Y-m-d H:i:s');
    $prodList = '[{"id":'.$idProd.',"cant":1}]';
    $nombre = "Pedido de ".$nombreProd;
    $descr = "Compra hecha desde el sitio web.";
    $newProd = $conn->prepare("INSERT INTO Pedido (prodList, nombre, descr, costo, fechaCreacion, idEmpresa) VALUES (?,?,?,?,?,5)");
    $newProd->bind_param("sssss",$prodList,$nombre,$descr,$prodPrecio,$fechaHora);
    $newProd->execute();
}

?>