<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$user = $_POST["user"];
$pass = $_POST["pass"];

if($user == "Admin" && $pass == "pass"){
    echo "welcome";
    }else{
            echo "Wrong username";
    }
?>