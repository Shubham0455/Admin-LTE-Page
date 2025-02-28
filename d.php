<?php
    include_once('conn.php');
    if(@$_GET['id'])
    {
    $id = $_GET['id'];
    $qry = "DELETE FROM `followup` WHERE `id` = '$id'";
    $run = mysqli_query($conn,$qry);
    if(session_destroy())
    {
        header('location:followup.php');
    }
}
    ?>