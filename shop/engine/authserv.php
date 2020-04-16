<?php
include "database.php";

$login = (!empty($_POST['login']))?strip_tags($_POST['login']):"";
$pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']):"";

$sql = "SELECT * FROM users WHERE `login`='$login' and `pass`=md5('$pass')";
$res = mysqli_query($connection, $sql) or die ("Error".mysqli_error($connection));

if (mysqli_num_rows($res) > 0) {
    setcookie("login",$login,time()+3600,'/');
    setcookie("pass",$pass,time()+3600,'/');
    header("Location: ../auth.php?success=true");
} else {
    header("Location: ../auth.php?success=false");
}

mysqli_close($connection);
?>