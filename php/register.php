<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
   $userData = $username. ",". $email. ",". $password;
   $CFO = fopen("../storage/users.csv", "a");
   fwrite($CFO, $userData);
   fclose($CFO);
}
echo "HANDLE THIS PAGE";
echo "<br>";
if(isset($_POST) & !empty($_POST)){
echo"User Successfully registered";
}
?>


