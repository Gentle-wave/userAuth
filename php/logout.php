<?php
session_start();
logout();

function logout(){
unset( $_SESSION['username']);
session_destroy();
header("location: http://localhost/PHP/userAuth/forms/login.html");

}

echo "HANDLE THIS PAGE";
?>