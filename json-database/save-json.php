<?php

require("../functions/validar-form.php");


$pass = $_POST['password'];

include("./encrypter.php");

// check if all form data are submited, else output error message
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
  // if form fields are empty, outputs message, else, gets their data
  if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
    echo 'Todos los campos son obligatorios';
  }
  else {


    $formdata = array(
      'username'=> $_POST['username'],
      'email'=> $_POST['email'],
      'password'=> encryptIt($pass)
    );

    //open or read json data
     $data_results = file_get_contents('formdata.json');

     $tempArray = json_decode($data_results, true);


            foreach ($tempArray as $key => $value) {
                  if ( $value['email'] == $_POST['email'] ){
                    echo "email ya registrado";
                    exit;
                    }
               }


     //append additional json to json file
     $tempArray[] = $formdata;
     $jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);

    // saves the json string in "formdata.txt" (in "dirdata" folder)
    // outputs error message if data cannot be saved
    if(file_put_contents('formdata.json', $jsonData)) {

              die( header("Location: ../login.php") );


    } else {

      die ( 'No se pudo guardar la info ( Revisar permisos de directorio )' );


    }
  }
}
else echo '

      <div class="container">
        <h6>Por favor llena todos los campos.</h6>
        <a role="button" class="btn btn-block btn-outline-primary" href="../registrate.php">Volver</div>';
?>
