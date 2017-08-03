<?php 
    
    // delete cookies.
    setcookie("username"); 
    setcookie("usertype"); 
    
    /*
    $_COOKIE["username"] = "";
    unset($_COOKIE["username"]);
    $_COOKIE["usertype"] = "";
    unset($_COOKIE["usertype"]);
    */
    
    // delete the session.
    session_start();
    $_SESSION['user'] = "";
    unset($_SESSION['newsession']);
    // destroy the session.
    session_destroy();
    // redirect to the index page.
    header("Location: index.php");
    
?>