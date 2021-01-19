<?php

?>
<!DOCTYPE html>
<html>
    <head>
    <title>
        Signup
    </title>
    <link href ="../Static/css/register.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <form action="create_user.php" method="post">
            <br />
            <fieldset class="border">
                <legend>Signup</legend>
                <img class="logo" src="../Static/Pictures/Untitled.png">
                <p class="tcs">By signing up, you agree to our Terms and Conditions.</p>
                <p><input class="bs" type="text" name="Username" placeholder=" Enter Username" title="Username is not valid" required></p>
                <p><input class="bs" type="password" name="Password" placeholder=" Enter Password" pattern="(?=.*[A-Z0-9])(?=.*[a-z]).{8,}" title="Password not valid" required></p>
                <P><input class="bs" type="email" name="Email"   placeholder="Enter Email" required></P>
                <input class="submit" type="submit" name="Submit" value="Sign Up">
            </fieldset>
        </form>
        <section class="bs_2">
            <div class="bs_3">Have an account already?
                <a href="login.html">Login</a></div>
        </section>
    </body>
</html>