<?php
include 'connection.php'; 
$role_id=$_GET['update'];

//auto save upon update

$sql="SELECT * FROM `role_control` where role_id= $role_id";
// $res=mysqli_query($conn, $sql);
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


$role = $row['role'];

$notification_send = $row['notification_send'] === '1' ? 'notification_send ' : '' ;
$balance_drives = $row['balance_drives'] === '1' ?' balance_drives ': '' ;
$my_account = $row['my_account'] === '1' ? 'my_account' : '' ;
$drivers = $row['drivers'] === '1' ? 'drivers':  '' ;
$manage_ride = $row['manage_ride'] === '1' ? 'manage_ride' : '' ;
$pickup_user = $row['pickup_user'] === '1' ? 'pickup_user' : '' ;
$destination_users = $row['destination_users'] === '1' ? 'destination_users' : '' ;
$price_rate = $row['price_rate'] === '1' ? 'price_rate' : '' ;
$reffrel_amount_notification = $row['reffrel_amount_notification'] === '1' ? 'reffrel_amount_notification' : '' ;
$bank_setting = $row['bank_setting'] === '1' ? 'bank_setting' : '' ;




if(isset($_POST['submit'])){


    $role_id= $row["role_id"];

    $role = isset($_POST['role']) ? $_POST['role'] : '';
    $notification_send = isset($_POST['notification_send']) ? $_POST['notification_send'] : '';
    $balance_drives = isset($_POST['balance_drives']) ? $_POST['balance_drives'] : '';
    $my_account = isset($_POST['my_account']) ? $_POST['my_account'] : '';
    $drivers = isset($_POST['drivers']) ? $_POST['drivers'] : '';
    $manage_ride = isset($_POST['manage_ride']) ? $_POST['manage_ride'] : '';
    $pickup_user = isset($_POST['pickup_user']) ? $_POST['pickup_user'] : '';
    $destination_users = isset($_POST['destination_users']) ? $_POST['destination_users'] : '';
    $price_rate = isset($_POST['price_rate']) ? $_POST['price_rate'] : '';
    $reffrel_amount_notification = isset($_POST['reffrel_amount_notification']) ? $_POST['reffrel_amount_notification'] : '';
    $bank_setting = isset($_POST['bank_setting']) ? $_POST['bank_setting'] : '';


$sql = "UPDATE `role_control` 
set role_id='$role_id',role='$role',notification_send='$notification_send',balance_drives='$balance_drives',my_account='$my_account',drivers='$drivers',manage_ride='$manage_ride',pickup_user='$pickup_user',destination_users='$destination_users',price_rate='$price_rate',reffrel_amount_notification='$reffrel_amount_notification',bank_setting='$bank_setting'
WHERE role_id=$role_id";

$result=mysqli_query($conn,$sql);

if($result){
// echo "updated";
header('location:role.php');
}
else{
die(mysqli_error($conn));
}

}


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
    #main{
        width: 80%;
        height:80%;
        position: absolute;
        top:10%;
        left:10%;
    }
</style>
<body>
    <div id="main" >

    <form  method="post" >
    <label for="">  Role : <input type="text" name="role" placeholder="enter our role"value=<?php
     echo $role;?> required > </label>            
    <br><br>

    
    <label>
        <input type="checkbox" name="notification_send" value="1" 
        <?php if( $row['notification_send'] == '1') echo 'checked'; ?> > Notification Send 
      </label>
      <br>
      <label>
        <input type="checkbox" name="balance_drives" value="1"  <?php if( $row['balance_drives'] == '1') echo 'checked'; ?>> Balance Drives For Conform Withdrow
      </label>
      <br>
      <label>
        <input type="checkbox" name="my_account" value="1"  <?php if( $row['my_account'] == '1') echo 'checked'; ?> > My Account
      </label>
      <br>
      <label>
        <input type="checkbox" name="drivers" value="1"  <?php if( $row['drivers'] == '1') echo 'checked'; ?>> Drivers- Suspand, edit driver,delete
      </label>
      <br>
      <label>
        <input type="checkbox" name="manage_ride" value="1"  <?php if( $row['manage_ride'] == '1') echo 'checked'; ?>> Manage Ride
      </label>
      <br>
      <label>
        <input type="checkbox" name="pickup_user" value="1"  <?php if( $row['pickup_user'] == '1') echo 'checked'; ?>> Pickup User - Edit, Delete
      </label>
      <br>
      <label>
        <input type="checkbox" name="destination_users" value="1"  <?php if( $row['destination_users'] == '1') echo 'checked'; ?>> Destination Users
      </label>
      <br>
      <label>
        <input type="checkbox" name="price_rate" value="1"  <?php if( $row['price_rate'] == '1') echo 'checked'; ?>> Price Rate KM Modification
      </label>
      <br>
      <label>
        <input type="checkbox" name="reffrel_amount_notification" value="1"  <?php if( $row['reffrel_amount_notification'] == '1') echo 'checked'; ?>> Reffrel Amount Notification
      </label>
      <br>
      <label>
        <input type="checkbox" name="bank_setting" value="1"  <?php if( $row['bank_setting'] == '1') echo 'checked'; ?> >Bank Setting
      </label>
      <br>
      <button type="submit" class="btn btn-primary"name="submit">update</button>
    </form>

    </div>


   
</body>
</html>