<?php
session_start();
logout();

function logout(){
    if( $_SESSION['username']){
        unset( $_SESSION['username']);
        session_destroy();
        header("location: http://localhost/PHP/userAuth/forms/login.html");        
    } else {
        
    }

}

echo "HANDLE THIS PAGE";
?>