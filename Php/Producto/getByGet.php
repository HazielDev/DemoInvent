<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Php/Vars/default.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {die("Error al conectar a la base de datos: " . mysqli_connect_error());}

if(isset($_GET['id'])){
    $idProd = $_GET['id'];
    $getProds = $conn->prepare("SELECT * FROM Producto WHERE idEmpresa = 5 AND Id = ?");
    $getProds->bind_param("i",$idProd);
    if($getProds->execute()){
        $getProdsRes = $getProds->get_result();
        if($getProdsRes->num_rows > 0){
            $prod = $getProdsRes->fetch_assoc();
        }
    }
}

?>