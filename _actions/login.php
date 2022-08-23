<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;


$email = $_POST["email"];

$table = new UsersTable(new MySQL());

$hash = $table->findHashPassword($email);

$password = $hash->password;

if( password_verify($_POST["password"], $password) ) {

    $user = $table->findByEmailAndPassword($email, $password);
    
    if($user->suspended === 1) {

        HTTP::redirect("/index.php", "suspended=1");
    }

    session_start();

    $_SESSION["nyan"] = $user;

    HTTP::redirect("/profile.php");
} else {
    
    HTTP::redirect("/index.php", "incorrect=1");
}