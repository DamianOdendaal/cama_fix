 <!DOCTYPE html>
<html>
    <head>
        <title>
            Signup
        </title>
    <link href ="../Static/css/login.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <form action="authenticated.php" method="post">
            <br />
            <fieldset class="border">
                <legend>Login</legend>
                <img class="logo" src="../Static/Pictures/Untitled.png">
                <p><input class="bs" type="text"  name="Username" placeholder=" Enter Username"  title="Username is not valid" required></p>
                <p><input class="bs" type="password"  name="Password" placeholder=" Enter Password" pattern="(?=.*[A-Z0-9])(?=.*[a-z]).{8,}" title="Password not valid" required></p>
                <input class="submit" type="submit" name="Submit" value="Login">
                <p class="bs_3">OR</p>   
                <a style="font-family: monospace; position: relative; left: 102px; font-size: 15px" href="forgot_password.php">forgot password</a>
            </fieldset>
        </form>
        <section class="bs_2">
            <div class="example">Do nots have an account yet?
                <a href="sign_up.php">Sign Up</a></div>
        </section>
    </body>
</html>