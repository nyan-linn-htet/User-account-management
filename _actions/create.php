<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$data = [
    "name" => $_POST["name"] ?? "Unknown",
    "email" => $_POST["email"] ?? "Unknown",
    "phone" => $_POST["phone"] ?? "Unknown",
    "address" => $_POST["address"] ?? "Unknown",
    "password" => password_hash( $_POST["password"], PASSWORD_BCRYPT),
    "role_id" => 3,
];

$table = new UsersTable(new MySQL());

if($table) {
    $table->insert($data);
    HTTP::redirect("/index.php", "register=true");
} else {
    HTTP::redirect("register.php", "error=true");
}