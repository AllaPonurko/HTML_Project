<?php
$n=1;
echo "Session_id="."$n"."<br/>";
if(!isset($_POST['submit'])&&$n==0)
{
    echo '<h2>Register please</h2>';
    echo '<form action="form2.php" method="POST">';
    echo '<p>Enter your name: <input type="text"
name="username"></p>';
    echo '<p>Enter your password:
<input type="password" name="userpass"></p>';
    echo '<p><input type="submit" name="submit1"
value="Register"></p>';
    echo '</form>';
}
elseif ($n==1)
{
    echo '<h2>You are already registered</h2>'.'<br/>';
    echo '<p><input type="submit" name="submit2"value="Login"></p>';
}
?>
