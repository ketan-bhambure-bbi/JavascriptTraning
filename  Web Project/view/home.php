<style> 
        .form{
            width:30%;
            min-width: 200px;
            height:10%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            background-color:gray;
            margin-left:35%;
            margin-right:35%;
        } 
</style>
<?php
include '../controller/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Uname'];
    $pass = $_POST['password'];
    $retrive_query = "SELECT * FROM usersInformation WHERE username= '$username' AND upassword ='$pass'";
    $result = mysqli_query($conn, $retrive_query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        echo "loggedin";
        session_start();

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header("location: ToDO.php");
    } else {
        echo "<div class='form'>
              <p>Please Enter Correct Information</p>             
              </div>";
         
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/LogIn.css"> -->
    <style>
        body{
            background-color:black;

        }
        .signInDiv{
            width:30%;
            min-width: 200px;
            height:40%;
            min-height:270px;
            background-color:gray;
            margin-top:15%;
            margin-left:35%;
            margin-right:35%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;


        }
        #signInInputs{
            width:80%;
        }
        input{
            margin-top:3%;
            width:100%;
            height:30%;
            background-color:#c4f5e4;
        }
        button{
            width:40%;
            margin-top:3%;
            margin-left:30%;
            border-radius:70%;
            height:20%;
            background-color:#afbced;
            border:2px;
        }
        .Rembember{
            width:80%;
            margin-top:8%;
            display:flex;
            justify-content:space-between;

        }
        label {
            float: left
        }
        span {
            display: block;
            overflow: hidden;
            padding: 0 4px 0 6px
        }
        input.check {
            width: 15px;
            height:15px;
        }   
    </style>
</head>
<body>
    <div class="signInDiv">
        <div id="signInHeading">
            <h3>Log In</h3>
        </div>
        <div id="signInInputs">
            <form action="home.php" method="POST">
                <input id="Uname" type="email" name="Uname" placeholder="Enter your Mail"><br>
                <input id="password" type="text" name="password" placeHolder="Enter Password"><br>
                <input id="" name="login" style="display:none">
                <button id="LogIn" type="submit">Sign In</button><br>
            </form>
        </div>
        <div class="Rembember">
            <div>
                <label for="RememberLogIn"> Remember me</label> <span>
                <input id="RememberLogIn" class="check" type="checkbox" name="Uname"> </span>
            </div>
            <div>
                <a href="forgotpass.php">Forgot Password</a>
            </div>
            <div>
                <a href="signUp.php">Sign Up</a>
            </div>
        </div>
    </div>


</body>
</html>
