<div class='wrapperSignUp'>
    <div class='wrapperSignUp__header'>
        <?php include_once __DIR__."/../../components/header/index.php"; ?>
        <div class='wrapperSignUp__elements__catTab'>
            <?php   include_once __DIR__."/../../components/categories_tab/index.php"; ?>
        </div>
    </div>
    <div class='wrapperSignUp__elements'>
        <div class='wrapperSignUp__elements__main'>
            <form onsubmit="return validation();" action="./CreateUser.php?action=add" method='post'>
            <h2>Username</h2>
            <input id="username" name="username" required type="text"/>
            <h2>Password</h2>
            <input id="password" name="password" required type="password"/>
            <button type="submit" value="Submit">Sign Up</button>
            </form>
        </div>
    </div>
</div>

<script src="../../libs/js/validation.js"></script>