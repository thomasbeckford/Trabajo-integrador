<?php

session_start();

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
    if (  $value['password'] ==  $pass && $_POST['username'] == $value['username'] ){

        $_SESSION['user_id'] = $value['username'];
        $_SESSION['logged_in'] = time();
        $_SESSION['email'] = $value['email'];


        header('Location: ../index.php');
        exit;


  } else {
    echo "contraseña o email invalido";
  }
}
}
else echo 'The file '. $filetxt .' not exists';
?>
