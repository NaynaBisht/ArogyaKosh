<?php
    function emptyInputSignup($name, $i_id, $pwd, $license, $address, $phno){
        $result = true;
        if(empty($name) || empty($i_id) || empty($pwd) || empty($license) || empty($address) || empty($phno)){
            $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn ,$i_id){
    $sql = "SELECT * FROM institute WHERE i_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../landing.php?error=stmtfail");
        exit();
    }
    mysqli_stmt_bind_param($stmt, 's', $i_id);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    } else{
        $result = false;
        return $result;
    }
}
function createUser($conn, $name, $i_id, $pwd, $license, $phno){
    $sql = "INSERT INTO institute (name, i_id, address, phn, license, pwd) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../landing.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $name, $i_id, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../landing.php?error=none");
    exit();
}

function emptyInputLogin($i_id, $pwd){
    $result = true;
    if(empty($i_id) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $i_id, $pwd){
    $regnumexists = uidExists($conn, $i_id);
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
        $_SESSION["i_id"] = $regnumexists["i_id"];
        header("location: ../doctorspage.php");
        exit(); 
    }
}
