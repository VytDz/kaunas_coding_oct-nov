<?php

include_once __DIR__."db_connection.php";

function search () {

    if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "search") {
        $query = $_REQUEST["search"];

        $db = new DBConnection();
        $conn = $db->getConnection();


        $articles = $conn->query("SELECT `id`,`category`,`heading`,`article`,`img`
                                        FROM `articles`  WHERE `category`,`heading`,`article` 
                                        LIKE '%".$query."%' ;");

        $articlesArr = $articles->fetch_all();

        $conn->close();



}

?>