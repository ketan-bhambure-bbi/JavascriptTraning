
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
        body{
            background-color:black;
        }
</style>
<?php
include '../controller/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Uname'];
    $name1 = $_POST['Name'];
    $password = $_POST['password'];
    $insert_query = "INSERT INTO `usersInformation`(`username`, `email`, `upassword`) VALUES ( '$username','$name1','$password')";
    $result = mysqli_query($conn, $insert_query);
    $retrive_query1 = "SELECT * FROM usersInformation WHERE username= '$username'";
    $result2 = mysqli_query($conn, $retrive_query1);
    $num = mysqli_num_rows($result2);
    if ($result) {
        echo "<div class='form'>
              <p>You are registered successfully.</p>
              <p class='link'>Click here to <a href='home.php'>Login</a></p>
              </div>";
        

    } else if(empty($username) || empty($name1) || empty($password)){    

        echo "<div class='form'>
              <p>Required fields are missing.</p>               
              </div>";
         
    }
    else {
        echo "<div class='form'>
              <p>Already Registered.</p>
              <p class='link'>Click here to <a href='home.php'>Login</a></p>
              </div>";
        exit;

    }  

}
?>

    <style>
        body{
            background-color:black;

        }
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
        .signUpDiv{
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
        #signUpInputs{
            width:80%;
        }
        input{
            margin-top:3%;
            width:100%;
            height:20%;
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
        #log{
            margin-top:4%;
        }




    </style>

<body>
     
    <div class="signUpDiv">
        <div id="signUpHeading">
            <h2> Sign Up</h2>
        </div>
        <div id="signUpInputs">
            <form action="signUp.php" method="POST">
                <input id="Name" type="text" name="Name" placeholder="Enter your Name"><br>
                <input id="Uname" type="email" name="Uname" placeholder="Enter your Mail"><br>
                <input id="password" type="text" name="password" placeHolder="Enter Password"><br>
                <input id="" name="SignUp" style="display:none">
                <button id="SignUp" type="submit">Sign Up</button><br>
            </form>
        </div>
        <div id="log">
            <p>already have account?<a href="home.php">Log in</a></p>

        </div>
    </div>

</body>
