<?php
include 'connection.php';

if(isset($_GET['delitedid'])){
    $role_id=$_GET['delitedid'];

    $sql="DELETE from role_control where role_id=$role_id";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "deleted succefully";
        header('location:role.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>