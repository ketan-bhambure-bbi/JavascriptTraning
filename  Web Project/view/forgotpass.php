<?php
include '../controller/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Uname'];
    $pass = $_POST['password'];
    $retrive_query = "SELECT * FROM usersInformation WHERE username= '$username'";
    $result = mysqli_query($conn, $retrive_query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $updatePass = "UPDATE usersInformation SET `upassword`=$pass where `username` = '$username'";
        $result1 = mysqli_query($conn, $updatePass);        
        echo '<div id="error">Successfully updated password <a href="home.php">Log In</a></div>';
        

    } else {
        echo '<div id="error">The email Id doesnt exist<a href="signUp.php">Register</a></div>';

    }



}

?>

    
    <style>
        body{
            background-color:black;

        }
        #error{
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
        .forgotPass{
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
        #ForgotPassInputs{
            width:80%;

        }
        input{
            margin-top:6%;
            width:100%;
            height:30%;
            background-color:#c4f5e4;
        }
        button{
            width:40%;
            margin-top:6%;
            margin-left:30%;
            border-radius:70%;
            height:20%;
            background-color:#afbced;
            border:2px;
        }
    </style>
 
<body>
    <script>
        function message(){
            const maindiv=document.getElementsByClassName("forgotPass");
            const msg=document.getElementById("error");
            maindiv.appendChild(msg);
        }

    </script>
    <div class="forgotPass">
        <h2>Forgot Password</h2>
        <div id="ForgotPassInputs">
            <form action="forgotpass.php" method="POST">
                <input id="Uname" type="email" name="Uname" placeholder="Enter your registered Mail Id"><br>
                <input id="password" type="text" name="password" placeHolder="Enter new Password"><br>
                <input id="" name="forgotPassword" style="display:none">
                <button id="confirm" type="submit" onclick="message()">Confirm</button><br>
            </form>
        </div>
        <div>
    </div>
    </div>


</body>
 
