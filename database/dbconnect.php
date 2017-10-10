<?php
include("../shared/head/head.php");


define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'freemarket');

try{
    $pdo = new pdo( "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
                    MYSQL_USER,
                    MYSQL_PASSWORD,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(PDOException $ex){
    header("Location ../index.php");
    die('<div class="container col-md-5"><h3 style="margin-top: 50px">No hay conexion con la base de datos.</h3><h4>Intente mas tarde por favor.</h4> <br><br> <a class="btn btn-block btn-outline-info" role="button" href="../index.php">Volver</a></div>');
}

?>
