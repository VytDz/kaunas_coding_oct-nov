<?php

include_once __DIR__ . "/../../libs/php/db_connection.php";


function verifyUser()
{

    $db = new DBConnection();
    $conn = $db->getConnection();


    if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "signIn") {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        $result = $conn->query("SELECT `password` FROM `users` WHERE `username` = '" . $username . "' ;");

        $hashedPwd = $result->fetch_assoc()["password"];

        $conn->close();

        if (password_verify($password, $hashedPwd) && $username == "admin") {
            session_start();
            $_SESSION['user'] = $username;
            header("Location: ../admin_page/index.php");
        } else {
            echo 'Invalid password.';
            header("Location: ./index.php");
            exit();
        }

    }


}

verifyUser();


?>
