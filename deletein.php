<?php
    include_once('conn.php');
    if(@$_GET['id'])
    {
    $id = $_GET['id'];
    $qry = "DELETE FROM `inquiry` WHERE `id` = '$id'";
    $run = mysqli_query($conn,$qry);
    if(session_destroy())
    {
        header('location:inquiry.php');
    }
}
    ?>