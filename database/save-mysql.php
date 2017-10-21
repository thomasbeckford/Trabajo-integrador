
<?php
session_start();
//require ("../functions/validar-form.php"); //nueva funcion no testeada aca!
include('lib/password.php');
include('./dbconnect.php');


// Si existe el post de register
// Utilizo pdo para el select de mysql
if(isset($_POST['register'])){

    // Asignamos variables con los campos, le decimos que son nulos si no hay nada (validado antes).
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;

    // Constuimos el SQL. Preguntamos por el usuario.
    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username" ;
    $stmt = $pdo->prepare($sql);

    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':username', $username);

    //Execute.)
    $stmt->execute();

    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // El usuario ya existe ?
    if($row['num'] > 0){
        die('<div class="main-container container col-md-6"><h2>Ese nombre de usuario ya existe!<h2><hr><br><br><a role="button" class="btn btn-block btn-danger" href="../registrate.php">Volver</div>');
    }

    // Hago lo mismo con el email
    $sql = "SELECT COUNT(email) AS num FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row['num'] > 0){
      die('<div class="main-container container col-md-6"><h2>Ese email ya existe!<h2><hr><br><br><a role="button" class="btn btn-block btn-danger" href="../registrate.php">Volver</div>');
    }

    //Hash the password as we do NOT want to store our passwords in plain text.
    $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));

    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $pdo->prepare($sql);

    //Bind our variables.
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);
    $stmt->bindValue(':email', $email);

    //Execute the statement and insert the new account.
    $result = $stmt->execute();

    //If the signup process is successful.
    if($result){
        $msg = "Bienvenido a FreeMarket!\nConfirma tu email acá.";
        $msg = wordwrap($msg,70);
        mail($email,"Cuenta creada con exito!",$msg);

      header("Location: ../login.php");
    } else {
      echo "error";
    }

}

?>
