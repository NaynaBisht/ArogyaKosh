<?php
    function emptyInputSignup($name, $username, $pwd, $phno, $dob, $aadhar){
        $result = true;
        if(empty($name) || empty($username) || empty($pwd) || empty($phno) || empty($dob) || empty($aadhar)){
            $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn ,$username){
    $sql = "SELECT * FROM patient WHERE uid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../landing.php?error=stmtfail");
        exit();
    }
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    } else{
        $result = false;
        return $result;
    }
}
function createUser($conn, $name, $username, $pwd, $phno, $dob, $aadhar){
    $sql = "INSERT INTO patient (name, uid, pwd, phno, dob, aadhar) VALUES (?,?,?,?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../landing.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $username, $hashedPwd, $phno, $dob, $aadhar);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../landing.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result = true;
    if(empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $regnumexists = uidExists($conn, $username);
    if($regnumexists == false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $pwdhashed = $regnumexists["pwd"];
    $checkPwd = password_verify($pwd, $pwdhashed);
    if($checkPwd == false){
        header("location: ../login.php?error=wrongpassword");
        exit();
    }
    else if($checkPwd == true){
        session_start();
        $_SESSION["username"] = $regnumexists["uid"];
        header("location: ../login.php");
        exit(); 
    }
}
