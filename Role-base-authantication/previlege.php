<?php
include 'connection.php'; 
$role_id=$_GET['previlege'];

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


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

        <h2>ROLE: <?php
     echo  $role;?></h2>

        <ul>

  
  <?php
  if($notification_send!="")
     echo"<li>". $notification_send."</li>";?>
  <?php
  if($balance_drives!="")
     echo"<li>". $balance_drives."</li>";?>
  <?php
  if($my_account!="")
     echo"<li>". $my_account."</li>";?>
    <?php
  if($drivers!="")
     echo"<li>". $drivers."</li>";?>
    <?php
  if($manage_ride!="")
     echo"<li>". $manage_ride."</li>";?>
    <?php
  if($pickup_user!="")
     echo"<li>". $pickup_user."</li>";?>
    <?php
  if($destination_users!="")
     echo"<li>". $destination_users."</li>";?>
    <?php
  if($price_rate!="")
     echo"<li>". $price_rate."</li>";?>
    <?php
  if($reffrel_amount_notification!="")
     echo"<li>". $reffrel_amount_notification."</li>";?>
    <?php
  if($bank_setting!="")
     echo"<li>". $bank_setting."</li>";?>

</ul>


</body>
</html>