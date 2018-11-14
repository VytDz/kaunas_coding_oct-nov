<?php
    getRandomArticles();
    $img = $_SESSION["img"];
    $heading = $_SESSION["heading"];
    $text = $_SESSION["text"];
?>

    <a href="javascript:{}" onclick="document.getElementById('form1').submit(); return false;" class='articleHome'>
        <img src="<?php echo $img ?>" alt="thumbnail of a picture"/>
        <div class='articleHome__text'>
            <h2><?php echo $heading; ?></h2>
            <p><?php echo $text; ?></p>
        </div>
        <form id="form1" action="../../pages/article_page/index.php" method='post'>
            <input name="img" type="text" value="<?php echo $img?>"/>
            <input name="heading" type="text" value="<?php echo $heading?>"/>
            <input name="text" type="text" value="<?php echo $text?>"/>
        </form>
    </a>
