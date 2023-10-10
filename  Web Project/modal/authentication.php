<?php
include '../controller/db.php';
function login($username, $password)
{
    $retrive_query = "SELECT * FROM usersInformation WHERE username= '$username' AND upassword ='$password'";
    $result = mysqli_query($conn, $retrive_query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        return true;
    } else {
        return false;

    }
}
function signUp($username, $name, $password)
{
    $insert_query = "INSERT INTO `usersInformation`(`username`, `email`, `upassword`) VALUES ( '$username','$name','$password')";
    $result = mysqli_query($conn, $insert_query);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function forgotPassword($username, $Newpassword)
{
    $retrive_query = "SELECT * FROM usersInformation WHERE username= '$username'";
    $result = mysqli_query($conn, $retrive_query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $updatePass = "UPDATE usersInformation SET `upassword`=$Newpassword where `username` = '$username'";
        $result1 = mysqli_query($conn, $updatePass);
        if($result1){
            return true;
        }
        else{
            return false;
        }

    } else {
       return false;

    }
}
