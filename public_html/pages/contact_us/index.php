<?php

include_once __DIR__."/../../components/header/index.php";
include_once __DIR__."/../../components/categories_tab/index.php";

?>
<main class="contact">
    <form class="contact__form" action="./SendMessage.php" method='post'>
        <h1>Contact Us</h1>
        <p>Got a problem or a suggestion? We'd love to hear from you.</p>
        <input class="contact__input" name="username" type="text" required placeholder="Username">
        <input class="contact__input" name="email" type="email" required placeholder="Your email">
        <input class="contact__input-lg" name="message" type="text" required placeholder="Your message">
        <button class="contact__btn" type="submit" value="Submit">Send Message</button>
    </form>
</main>