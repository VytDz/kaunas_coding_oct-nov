<?php

include_once __DIR__ . "/db_connection.php";

//


function getArticlesByCategory($chosenCat)
{
    //database connection, and getting data
    $db = new DBConnection();
    $conn = $db->getConnection();

    $query = $conn->query("SELECT id,category,heading,article,img FROM articles  ORDER BY articles.date ASC ;");
    $articlesArr = $query->fetch_all();

    $conn->close();

    // Filter by page category
    $categorisedArticleArr = array();
    foreach($articlesArr as $row) {
        if($row[1] == $chosenCat)
            array_push($categorisedArticleArr, $row);
    }

    return $categorisedArticleArr;
}
?>

<?php include_once DIR."/../../components/header/index.php"; ?>
<?php include_once DIR."/../../components/categories_tab/index.php"; ?>
<div id="news" class="thumb-block">
    <?
    $articles = getArticlesByCategory("news");
    foreach($articles as $a) {
        echo '<div>';
        echo '<p>id: '       . $a[1] . '</p>';
        echo '<p>category: ' . $a[2] . '</p>';
        echo '<p>heading: '  . $a[3] . '</p>';
        echo '<p>article: '  . $a[4] . '</p>';
        echo '<p>img: '      . $a[5] . '</p>';
        echo '</div>';
    }
    ?>
</div>
