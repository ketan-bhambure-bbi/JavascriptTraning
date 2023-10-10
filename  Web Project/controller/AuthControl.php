<?php
    if(isset($_POST['SignUp'])){
        $username = $_POST['Uname'];
        $name = $_POST['Name'];
        $password = $_POST['password'];
        $signUp($username, $name, $password);
    }
?>