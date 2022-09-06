<?php
 if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];

        if(empty($name) && empty($email) && empty($number)){
            header("location: ../php/web.php?error=emptyinput");
            exit();
        }
        if(invalidName($name)){
            header("location: ../php/web.php?error=invalidname");
            exit();
        }
        if(invalidEmail($email)){
            header("location: ../php/web.php?error=invalidemail");
            exit();
        }
        if(!empty($name) && !empty($email) && !empty($number)){
            header("location: ../php/web.php?error=none");
            exit();
        }



    } else {
        header("location: ../php/web.php");
        exit();
    }




function invalidName($name){
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email){

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}
