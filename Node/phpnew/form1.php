<?php

if(isset($_GET["submit"]))
{
    echo 'You are welcome, '.$_GET["username"].
        '! Your password is '.$_GET["userpass"].'<br/>';
}
else
{
    echo 'No data were received!<br/>';
}
?>
<form action="form1.php" method="GET">
<p>Enter your name: <input type="text"
name="username"></p>
<p>Enter your password: <input type="password"
name="userpass"></p>
<p><input type="submit" name="submit"
value="Login"></p>
</form>
