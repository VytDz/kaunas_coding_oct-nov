<div class='wrapperSignIn'>
    <div class='wrapperSignIn__header'>
        <?php include_once __DIR__."/../../components/header/index.php"; ?>
            <div class='wrapperSignIn__elements__catTab'>
                <?php include_once __DIR__."/../../components/categories_tab/index.php"; ?>
            </div>
    </div>



    <div class='wrapperSignIn__elements'>
        <div class='wrapperSignIn__elements__main'>
            <form action="./SignIn.php?action=signIn" method='post'>
            <h2>Username</h2>
            <input name="username" required type="text"/>
            <h2>Password</h2>
            <input name="password" required type="password"/>
            <button type="submit" value="Submit">Sign In</button>
            </form>
        </div>
    </div>
</div>

