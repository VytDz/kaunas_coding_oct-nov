<!--test1-->


<?php
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



<!--test2-->
<?php
function getArticlesByCategory($chosenCat)
{
    //database connection, and getting data
    //$db = new DBConnection();
    //$conn = $db->getConnection();

    //$query = $conn->query("SELECT id,category,heading,article,img FROM articles  ORDER BY articles.date ASC ;");
    //$articlesArr = $query->fetch_all();
    $articlesArr = array(
        array(1, "news", "great news everyone", "here be news", "an img"),
        array(2, "news", "great news everyone 2", "here be news 2", "an img 2"),
        array(3, "not news", "nope", "nope nope", "no img"),
    );

    //$conn->close();

    // Filter by page category
    $categorisedArticleArr = array();
    foreach($articlesArr as $row) {
        var_dump($row[2]);
        if($row[2] == $chosenCat)
            array_push($categorisedArticleArr, $row);
    }
    var_dump($chosenCat);
    var_dump($categorisedArticleArr);
    return $categorisedArticleArr;
}
?>

<!--returns:-->
<div id="news" class="thumb-block">
    string(19) "great news everyone"
    string(21) "great news everyone 2"
    string(4) "nope"
    string(4) "news"
    array(0) {
    }
</div>