<?php

session_start();

require('../shared/head.php');
include("./encrypter.php");

// path and name of the file
$filetxt = 'formdata.json';

// check if the file exists
if(file_exists($filetxt)) {
  // gets json-data from file
  $jsondata = file_get_contents($filetxt);

  // converts json string into array
  $arr_data = json_decode($jsondata, true);

 // Encripto contraseña y las asigno.
  $pass = encryptIt($_POST['password']);

  foreach ($arr_data as $key => $value) {
    if (  $value['password'] ==  $pass && $_POST['username'] == $value['username'] ) {
      $flag = 1;
      break;
  } else {
        $flag = 0;
  }
}

  if ( $flag == 1 ) {
    $_SESSION['user_id'] = $value['username'];
    $_SESSION['logged_in'] = time();
    $_SESSION['email'] = $value['email'];
    echo "entro aca";
    header('Location: ../index.php');

  } else {
    echo ('<div style="margin-top:40px; text-align: center" class="container py-3 col-md-3 card card-body">
            <div><h3>Datos incorrectos!</h3>
              <br><br>
              <a href="../passrecover.php" class="btn btn-block btn-primary" role="button">Recuperar contraseña<br>
              <a href="../login.php" class="btn btn-block btn-success" role="button">Volver</a></div>');

  }


}
?>
