<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body{font-family: Arial;background:#f4f4f4;}
.container{
    width:320px;
    margin:120px auto;
    background:white;
    border:1px solid #ccc;
    padding:20px;
}
input{
    width:100%;
    padding:8px;
    margin:5px 0 15px;
}
button{
    padding:8px 20px;
}
.error{color:red;}
.success{color:green;}
</style>
</head>
<body>

<?php

$Employee = [
"NguyenVan_An" => "abc123",
"Tran_Thi_Bich" => "B715",
"Le_Van_Cuong" => "C_lo_vo_92",
"Pham_Thi_Dung" => "De_PT_68",
"Doan_Van_Em" => "E_v58"
];

function _login($username,$pass){
    global $Employee;

    if(isset($Employee[$username])){
        if($Employee[$username] == $pass){
            return true;
        }
    }
    return false;
}

$message = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(_login($username,$password)){
        $message = "<p class='success'>Login success</p>";
    }else{
        $message = "<p class='error'>Wrong username or password</p>";
    }
}

?>

<div class="container">

<h2>Login form</h2>

<form method="post">

<label>Username</label>
<input type="text" name="username" placeholder="Enter Username">

<label>Password</label>
<input type="password" name="password" placeholder="Enter password">

<button type="submit" name="login">Login</button>

</form>

<?php echo $message; ?>

</div>

</body>
</html>
