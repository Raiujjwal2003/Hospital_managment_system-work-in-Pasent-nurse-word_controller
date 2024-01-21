

<?php

 include 'connection.php';

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
 

 $sql = "INSERT INTO role_control(`role`, `notification_send`, `balance_drives`,`my_account`,`drivers`,`manage_ride`,`pickup_user`,`destination_users`,`price_rate`,`reffrel_amount_notification`,`bank_setting`)
VALUES ('$role','$notification_send', '$balance_drives', '$my_account', '$drivers', '$manage_ride', '$pickup_user','$destination_users', '$price_rate', '$reffrel_amount_notification', '$bank_setting')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  ?>