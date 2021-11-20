<?php

 include('db.php');


 if(isset($_POST['Registro'])) {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $email = $_POST['email'];
    $fecha =$_POST ['fechaNacimiento'];

    $query = "INSERT INTO registro values('$usuario','$nombre','$clave','$email','$fecha')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die ("query failed");
    }
    echo'guardar ';
    header('Location:index.php');
 }
    ?>