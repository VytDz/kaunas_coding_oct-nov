<?php
session_start();
include_once __DIR__."/../../libs/php/randomArticleHandler.php"
?>

<div class='wrapperHome'>
    <div class='wrapperHome__header'>
        <?php
            include_once __DIR__."/../../components/header/index.php";
        ?>
    </div>
    <div class='wrapperHome__elements'>
        <div class='wrapperHome__elements__main'>
            <?php
                include_once __DIR__."/../../components/categories_tab/index.php";
            ?>
            <!--need to figure out the way to import forms with new id-->
            <!--==============thumb1==================================-->
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
                    <input name="img" type="text" value="<?php echo $img?>"/>
                    <input name="heading" type="text" value="<?php echo $heading?>"/>
                    <input name="text" type="text" value="<?php echo $text?>"/>
                    <input type="submit" value="submit">
                </form>
            </a>
            <!--need to figure out the way to import forms with new id-->
            <!--==============thumb2==================================-->
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
                    <input name="img" type="text" value="<?php echo $img?>"/>
                    <input name="heading" type="text" value="<?php echo $heading?>"/>
                    <input name="text" type="text" value="<?php echo $text?>"/>
                    <input type="submit" value="submit">
                </form>
            </a>
            <!--need to figure out the way to import forms with new id-->
            <!--==============thumb3==================================-->
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
                    <input name="img" type="text" value="<?php echo $img?>"/>
                    <input name="heading" type="text" value="<?php echo $heading?>"/>
                    <input name="text" type="text" value="<?php echo $text?>"/>
                    <input type="submit" value="submit">
                </form>
            </a>
            <!--need to figure out the way to import forms with new id-->
            <!--==============thumb4==================================-->
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
                    <input name="img" type="text" value="<?php echo $img?>"/>
                    <input name="heading" type="text" value="<?php echo $heading?>"/>
                    <input name="text" type="text" value="<?php echo $text?>"/>
                    <input type="submit" value="submit">
                </form>
            </a>



        </div>
        <div class='wrapperHome__elements__aside'>
            <?php
                include_once __DIR__."/../../components/twitter_feed/index.php";
            ?>
        </div>
    </div>
    <?php include_once __DIR__."/../../components/footer/index.php"; ?>
</div>
