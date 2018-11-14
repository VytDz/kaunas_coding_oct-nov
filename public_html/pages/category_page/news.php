<?php
session_start();
session_unset();

include_once __DIR__ . "/../../libs/php/db_connection.php";

function getRandomArticles()
{
    $db = new DBConnection();
    $conn = $db->getConnection();


    $articles = $conn->query("SELECT `heading`,`article`,`img` FROM `articles` WHERE `category` = 'news' ORDER BY `articles`.`date` ASC ;");

    $articlesArr = $articles->fetch_all();

    $conn->close();

    $randomId = rand(1, (count($articlesArr) - 1));

    $randomArticle = $articlesArr[$randomId];

    $_SESSION["text"] = $randomArticle[1];
    $_SESSION["heading"] = $randomArticle[0];
    $_SESSION["img"] = $randomArticle[2];

}


?>

<?php include_once __DIR__ . "/../../components/header/index.php"; ?>
<?php include_once __DIR__ . "/../../components/categories_tab/index.php"; ?>
<div id="news" class="thumb-block">
    <!--need to figure out the way to import forms with new id-->
    <!--==============thumb1==================================-->
    <div>
        <?php
        getRandomArticles();
        $img = $_SESSION["img"];
        $heading = $_SESSION["heading"];
        $text = $_SESSION["text"];
        ?>
        <a href="javascript:{}" onclick="document.getElementById('form1').submit();" class='articleHome'>
            <img src="<?php echo $img ?>" alt="thumbnail of a picture"/>
            <div class='articleHome__text'>
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <form id="form1" action="../../pages/article_page/index.php?action=post" method='post'>
                <input name="img" type="text" value="<?php echo $img ?>"/>
                <input name="heading" type="text" value="<?php echo $heading ?>"/>
                <input name="text" type="text" value="<?php echo $text ?>"/>
                <input type="submit" value="submit">
            </form>
        </a>
    </div>
    <!--need to figure out the way to import forms with new id-->
    <!--==============thumb2==================================-->
    <div>
        <?php
        getRandomArticles();
        $img = $_SESSION["img"];
        $heading = $_SESSION["heading"];
        $text = $_SESSION["text"];
        ?>

        <a href="javascript:{}" onclick="document.getElementById('form2').submit();" class='articleHome'>
            <img src="<?php echo $img ?>" alt="thumbnail of a picture"/>
            <div class='articleHome__text'>
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <form id="form2" action="../../pages/article_page/index.php?action=post" method='post'>
                <input name="img" type="text" value="<?php echo $img ?>"/>
                <input name="heading" type="text" value="<?php echo $heading ?>"/>
                <input name="text" type="text" value="<?php echo $text ?>"/>
                <input type="submit" value="submit">
            </form>
        </a>
    </div>
    <!--need to figure out the way to import forms with new id-->
    <!--==============thumb3==================================-->
    <div>
        <?php
        getRandomArticles();
        $img = $_SESSION["img"];
        $heading = $_SESSION["heading"];
        $text = $_SESSION["text"];
        ?>

        <a href="javascript:{}" onclick="document.getElementById('form3').submit();" class='articleHome'>
            <img src="<?php echo $img ?>" alt="thumbnail of a picture"/>
            <div class='articleHome__text'>
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <form id="form3" action="../../pages/article_page/index.php?action=post" method='post'>
                <input name="img" type="text" value="<?php echo $img ?>"/>
                <input name="heading" type="text" value="<?php echo $heading ?>"/>
                <input name="text" type="text" value="<?php echo $text ?>"/>
                <input type="submit" value="submit">
            </form>
        </a>
    </div>
    <!--need to figure out the way to import forms with new id-->
    <!--==============thumb4==================================-->
    <div>
        <?php
        getRandomArticles();
        $img = $_SESSION["img"];
        $heading = $_SESSION["heading"];
        $text = $_SESSION["text"];
        ?>

        <a href="javascript:{}" onclick="document.getElementById('form4').submit();" class='articleHome'>
            <img src="<?php echo $img ?>" alt="thumbnail of a picture"/>
            <div class='articleHome__text'>
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <form id="form4" action="../../pages/article_page/index.php?action=post" method='post'>
                <input name="img" type="text" value="<?php echo $img ?>"/>
                <input name="heading" type="text" value="<?php echo $heading ?>"/>
                <input name="text" type="text" value="<?php echo $text ?>"/>
                <input type="submit" value="submit">
            </form>
        </a>
    </div>
    <!--need to figure out the way to import forms with new id-->
    <!--==============thumb5==================================-->
    <div>
        <?php
        getRandomArticles();
        $img = $_SESSION["img"];
        $heading = $_SESSION["heading"];
        $text = $_SESSION["text"];
        ?>

        <a href="javascript:{}" onclick="document.getElementById('form5').submit();" class='articleHome'>
            <img src="<?php echo $img ?>" alt="thumbnail of a picture"/>
            <div class='articleHome__text'>
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <form id="form5" action="../../pages/article_page/index.php?action=post" method='post'>
                <input name="img" type="text" value="<?php echo $img ?>"/>
                <input name="heading" type="text" value="<?php echo $heading ?>"/>
                <input name="text" type="text" value="<?php echo $text ?>"/>
                <input type="submit" value="submit">
            </form>
        </a>
    </div>
    <!--need to figure out the way to import forms with new id-->
    <!--==============thumb6==================================-->
    <div>
        <?php
        getRandomArticles();
        $img = $_SESSION["img"];
        $heading = $_SESSION["heading"];
        $text = $_SESSION["text"];
        ?>

        <a href="javascript:{}" onclick="document.getElementById('form6').submit();" class='articleHome'>
            <img src="<?php echo $img ?>" alt="thumbnail of a picture"/>
            <div class='articleHome__text'>
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <form id="form6" action="../../pages/article_page/index.php?action=post" method='post'>
                <input name="img" type="text" value="<?php echo $img ?>"/>
                <input name="heading" type="text" value="<?php echo $heading ?>"/>
                <input name="text" type="text" value="<?php echo $text ?>"/>
                <input type="submit" value="submit">
            </form>
        </a>
    </div>
</div>



