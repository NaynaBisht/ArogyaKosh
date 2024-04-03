<?php
    function emptyInputSignup($name, $regnum, $pwd, $phno){
        $result = true;
        if(empty($name) || empty($regnum) || empty($pwd) || empty($phno)){
            $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn ,$regnum){
    $sql = "SELECT * FROM users WHERE usersRegnum = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../RegisterStudent.php?error=stmtfail");
        exit();
    }
    mysqli_stmt_bind_param($stmt, 's', $regnum);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    } else{
        $result = false;
        return $result;
    }
}
function createUser($conn, $name, $regnum, $pwd, $phno){
    $sql = "INSERT INTO users (usersName, usersRegnum, usersPwd, usersNo) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../RegisterStudent.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $regnum, $hashedPwd, $phno);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../RegisterStudent.php?error=none");
    exit();
}

function emptyInputLogin($regnum, $pwd){
    $result = true;
    if(empty($regnum) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $regnum, $pwd){
    $regnumexists = uidExists($conn, $regnum);
    if($regnumexists == false){
        header("location: ../studentlogin.php?error=wronglogin");
        exit();
    }
    $pwdhashed = $regnumexists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdhashed);
    if($checkPwd == false){
        header("location: ../studentlogin.php?error=wrongpassword");
        exit();
    }
    else if($checkPwd == true){
        session_start();
        $_SESSION["regnumber"] = $regnumexists["regnum"];
        header("location: ../studentHomePg.php");
        exit(); 
    }
}
