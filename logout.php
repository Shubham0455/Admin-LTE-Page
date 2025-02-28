<?php
    include_once('conn.php');

    session_destroy();
    
    header("location:login.php");
?>