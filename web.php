<!DOCTYPE html>
<html>
<head>
    <title>PHP Login Page</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,#4facfe,#00f2fe);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            background:white;
            padding:30px;
            border-radius:10px;
            width:350px;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
        }

        input{
            width:100%;
            padding:10px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            background:#007bff;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#0056b3;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html><?php

$username = $_POST['username'];
$password = $_POST['password'];

$validUser = "admin";
$validPass = "12345";

if($username == $validUser && $password == $validPass)
{
    header("Location: welcome.php");
}
else
{
    echo "<h2 style='color:red;text-align:center'>
            Invalid Username or Password
          </h2>";

    echo "<center><a href='index.php'>Try Again</a></center>";
}

?>