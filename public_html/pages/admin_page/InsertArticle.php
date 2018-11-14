<?php

include_once __DIR__ . "/../../libs/php/db_connection.php";

function insertArticle() {
    $db = new DBConnection();
    $conn = $db->getConnection();

//    var_dump($conn);

    $stmt = $conn->prepare("INSERT INTO `projektas`.`articles` (category, heading, article, img) VALUES (?, ?, ?, ?)");

//    var_dump($stmt);

    if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "add") {
        $category = $_REQUEST["category"];
        $heading = $_REQUEST["heading"];
        $article = $_REQUEST["article"];
        $img = $_REQUEST["image"];
    }

    $stmt->bind_param("ssss",$category, $heading, $article, $img);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

insertArticle();

header("Location: ./index.php");

?>


