<!DOCTYPE html>
<html>
<body>
 
<form method="post" action="login.php">
User Id: <input type="text" name="userid"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="Login">
<?php
$uid = $_POST['userid'];
$pw = $_POST['password'];
 
if($uid == 'ben' and $pw == 'ben23')
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
}
?>
</form>
 
</body>
</html

