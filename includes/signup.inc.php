<?php
    if(isset($_POST["submit"]) and !(empty($_POST["aadhar"]))){

        $name = $_POST["name"];
        $username = $_POST["username"];
        $pwd = $_POST["password"];
        $dob = $_POST["dob"];
        $aadhar = $_POST["aadhar"];
        $phno = $_POST["phone"];
        

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($name, $username, $pwd, $phno, $dob, $aadhar) !== false){
            header("location: ../landing.php?error=emptyinput");
            exit();
        }
        if (uidExists($conn, $username) !== false){
            header("location: ../landing.php?error=usernameexists");
        } 
    createUser($conn, $name, $username, $pwd, $phno, $dob, $aadhar);
    exit();
}
if(isset($_POST["submit"]) and $_POST["i_id"]){

    $name = $_POST["institute_name"];
    $i_id = $_POST["institute_id"];
    $license = $_POST["license"];
    $pwd = $_POST["password"];
    $phno = $_POST["phone"];
    $address = $_POST["address"];

    require_once 'dbh.inc.php';
    require_once 'funcinst.inc.php';

    if (emptyInputSignup($name, $i_id, $license, $pwd, $phno, $address) !== false){
        header("location: ../landing.php?error=emptyinput");
        exit();
    }
    if (uidExists($conn, $username) !== false){
        header("location: ../landing.php?error=usernameexists");
    } 
    createUser($conn, $name, $i_id, $license, $pwd, $phno, $address);
    exit();
}
