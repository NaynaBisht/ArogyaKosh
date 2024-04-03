<?php
    if(isset($_POST["submit"])){
        $regnum = $_POST["regnum"];
        $pwd = $_POST["password"];

        require_once 'dbh.inc.php';
        require_once 'functionstore.inc.php';

        if (emptyInputLogin($regnum, $pwd) !== false){
            header("location: ../storelogin.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $regnum, $pwd);
    }
    