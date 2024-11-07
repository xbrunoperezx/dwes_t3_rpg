<?php
//configuracion de la base de datos
$host='localhostot';
$dbname='dwes_t3_rpg';
$username='root';
$password='';


try {

    $bd= new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",
    $username,
    $password);

    $db->setAtribute(PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION);

      echo"conexion realizada";

} catch (PDOException $e) {
    echo "error de conexion". $e->getMessage();
    exit;

}



/**
 * Php
 * Data
 * Object
 */
?>