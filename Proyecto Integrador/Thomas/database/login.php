<?php

//login.php

/**
 * Start the session.
 */
session_start();

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'dbconnect.php';


//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if(isset($_POST['login'])){

    //Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    //Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password, email FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);

    //Bind value.
    $stmt->bindValue(':username', $username);

    //Execute.
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        die('Incorrect username / password combination!');
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.

        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);

        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){

            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['myusername'] = $user['username'];
            $_SESSION['logged_in'] = time();
            $_SESSION['email'] = $user['email'];

            //Redirect to our protected page, which we called home.php

            header('Location: ../index.php');

            exit;

        } else{
            //$validPassword was FALSE. Passwords do not match.
    die('<div class="container col-md-5"><h3 style="margin-top: 50px">Datos incorrectos.</h3><h4>Quedan n intentos, recupera tu password aca <a href="../forgot-pass.php">Recuperar password</a>.</h4> <br><br> <a class="btn btn-block btn-outline-danger" role="button" href="../ingresa.php">Volver</a></div>');
        }
    }

}

?>
