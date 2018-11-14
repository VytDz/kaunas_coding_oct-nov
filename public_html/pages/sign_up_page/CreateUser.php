<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Derp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
</head>
<body>

<?php


//Adding a new user to the database

include_once __DIR__ . "/../../libs/php/db_connection.php";


function newUser()
{
    $db = new DBConnection();
    $conn = $db->getConnection();


    $stmt = $conn->prepare("INSERT INTO `projektas`.`users` (id, username, password) VALUES (?, ?, ?)");

    if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "add") {
        $id = NULL;
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $hashed = password_hash($password, PASSWORD_DEFAULT);
    }

    $stmt->bind_param("iss", $id, $username, $hashed);
    $stmt->execute();
    $stmt->close();
    $conn->close();


}

newUser();

?>


<!--adding styles to success message-->

<style>
    div {
        min-height: 700px;
        background: url("../img/bartosz-kwitkowski-509565-unsplash2.jpg");
        background-size: cover;
        width: 100%;
    }

    h1{
        margin:100px 0 0 0;
        color: #rgb(94, 115, 153;
        text-align: center;
    }
</style>

<!--Tags to style-->

<div>
    <h1 id="greeting"></h1>
</div>


<!--adding onload functionality to show message and redirect to  new page-->

<script> window.onload = function () {
        document.getElementById("greeting").innerHTML = "Thank you for joining us!";
    }

    setTimeout(function (){window.location.href = "../../index.php";},4000);

</script>


</body>
</html>
