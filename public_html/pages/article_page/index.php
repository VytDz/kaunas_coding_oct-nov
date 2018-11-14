<?php if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "post") {
    $img = $_REQUEST["img"];
    $heading = $_REQUEST["heading"];
    $text = $_REQUEST["text"];

}?>

<div class='wrapperArticle'>
    <div class='wrapperArticle__header'>
        <?php include_once __DIR__."/../../components/header/index.php"; ?>
    </div>
    <div class='wrapperArticle__elements'>
        <div class='wrapperArticle__elements__main'>
            <?php include_once __DIR__."/../../components/categories_tab/index.php"; ?>
            <article class='articleFull'>
                <img src="<?php echo $img; ?>" alt="thumbnail of a picture"/>
                <div class='articleFull__text'>
                    <h2><?php echo $heading; ?></h2>
                    <p>
                        <?php echo $text; ?>
                    </p>
                </div>
            </article>
        </div>
        <div class='wrapperArticle__elements__aside'>
            <?php include_once __DIR__."/../../components/twitter_feed/index.php"; ?>
        </div>
    </div>
<!--    --><?php //include_once __DIR__."/../../components/comment_section/index.php"; ?>
</div>