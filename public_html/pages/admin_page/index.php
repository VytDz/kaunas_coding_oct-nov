<?php
include_once __DIR__."/../../components/header/index.php";
include_once __DIR__."/../../components/categories_tab/index.php";

session_start();


if ( $_SESSION["user"] !== 'admin'){
    header("Location: ../../index.php");
    session_write_close();
}

?>

<div class="article-wrapper">
    <form class="article-form" action="./InsertArticle.php?action=add" method='post'>
        <h1>You can add articles in this page</h1>
        <h3 class="article-form__name">Category</h3>
        <input class="article-form__input" name="category" required type="text"/>
        <h3 class="article-form__name">Heading</h3>
        <input class="article-form__input" name="heading" required type="text"/>
        <h3 class="article-form__name">Image url</h3>
        <input class="article-form__input" name="image" required type="text"/>
        <h3 class="article-form__name">Article</h3>
        <textarea class="article-form__input-lg" name="article" required type="text"></textarea>
        <button type="submit" value="Submit">Upload article</button>
    </form>
</div>






<!--//-->
<!--Start a session: session_start()-->
<!--If Session["user"] == null, redirect to the login page, else continue.-->
<!--In the login page, ask the user for password using a form-->
<!--Post this form to the login page-->
<!--Check against your authentication service (e.g. a table in mysql) if the user is authorized-->
<!--If yes, Session["user"] = $userName, redirect the user to the page. If no, prompt for password again-->
<!--Of course, this is all very, very simple. In your session, you could keep a complex user object, or anything. Good luck coding.-->
<!--//-->
<!--session_start();-->
<!--if (!isset($_SESSION['nID']))-->
<!--header("Location: login.php");-->
<!--If the login is ok-->
<!---->
<!--session_start();-->
<!--$_SESSION['nID'] = 1; //example-->
<!---->
<!--//-->
<!--if (!isset($_SESSION['nID']))-->
<!--header("Location: login.php");-->
<!--However.. this would not actually secure the page against users who really wanted access. You need to make some adjustments:-->
<!---->
<!--if (!isset($_SESSION['nID']))-->
<!--{-->
<!--header("Location: login.php");-->
<!--die();-->
<!--}-->
<!--This prevents bots and savy users who know how to ignore browser headers from getting into the page and causing problems. It also allows the page to stop executing the rest of the page and to save resources.-->
<!---->
<!--Its also noteworthy that $_SESSION['nID'] can be swapped out for any other variable you are using to store usernames or id's.-->
