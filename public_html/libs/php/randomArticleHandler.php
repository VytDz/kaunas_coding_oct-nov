<?php

include_once __DIR__ . "/db_connection.php";

function getRandomArticles()
{
    $db = new DBConnection();
    $conn = $db->getConnection();


    $articles = $conn->query("SELECT `id`,`category`,`heading`,`article`,`img` FROM `articles`  ORDER BY `articles`.`date` ASC ;");

    $articlesArr = $articles->fetch_all();

    $conn->close();

    $randomId = rand(1, (count($articlesArr) - 1));

    $randomArticle = $articlesArr[$randomId];

    $_SESSION["text"] = $randomArticle[3];
    $_SESSION["heading"] = $randomArticle[2];
    $_SESSION["img"] = $randomArticle[4];

}

?>