<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    $path = "../storage/users.csv";
    if(file_exists($path)){
        $fileContent = trim(file_get_contents($path));
        $contents = explode("\n", $fileContent);
        $users = [];
        foreach($contents as $value){
            $user = explode(',', $value);
            $users[$user[1]] = [
                'name' => $user[0],
                'password' => $user[2]
            ];
        }
            
        if(isset($users[$_POST['email']])){
            $users[$_POST['email']]['password'] = $newpassword;
            $content = '';
            foreach ($users as $key => $value) {
                $content .= "{$value['name']},{$key},{$value['password']}\n";
                file_put_contents("../storage/users.csv", $content);
            }

           echo 'Password sucessfully changed';
        }else{
           echo 'user could not be found';
        }
    
        


    }

}
echo "<br";
echo "HANDLE THIS PAGE";


