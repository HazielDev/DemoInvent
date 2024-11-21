<?php 

include 'Php/Vars/default.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {die("Error al conectar a la base de datos: " . mysqli_connect_error());}

$getProds = $conn->prepare("SELECT * FROM Producto WHERE idEmpresa = 5");
if($getProds->execute()){
    $getProdsRes = $getProds->get_result();
    if($getProdsRes->num_rows > 0){
        while ($prod = $getProdsRes->fetch_assoc()) {
            echo '
            <a href="prod.php?id='.$prod['Id'].'" class="art">
                <div class="artImage" style="background-image:url(data:image/png;base64,'.base64_encode($prod['Imagen_1']).')"></div>
                <p>'.$prod['Nombre'].'</p>
                <p class="artPrice">$'.$prod['precioPub'].'</p>
            </a>';
        }
    }
}

?>