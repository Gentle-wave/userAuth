
<?php
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    
    $path = "../storage/users.csv";
    if(file_exists($path)){
        $fileContent = trim(file_get_contents($path));
        $contents = explode("\n", $fileContent);
        $users = [];
        foreach($contents as $value){
            $user = explode(',', $value);
            $users[$user[1]] = $user[2];
        }
        if(isset($users[$email]) & $users[$email] === $password){
           $_SESSION['username'] = $email;
           header ("location: http://localhost/PHP/userAuth/dashboard.php");
           
        }else{
           // echo "user doesn't exist";
            header("location: http://localhost/PHP/userAuth/forms/login.html");
        }
        

    }

    
}
echo"<br>";

echo "HANDLE THIS PAGE";
