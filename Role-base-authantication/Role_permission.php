<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="add_permission.php" method="post" >
    <label for="">  Role : <input type="text" name="role" placeholder="enter our role" required > </label>            
    <br><br>
    <label>
        <input type="checkbox" name="notification_send" value="1"> Notification Send 
      </label>
      <br>
      <label>
        <input type="checkbox" name="balance_drives" value="1"> Balance Drives For Conform Withdrow
      </label>
      <br>
      <label>
        <input type="checkbox" name="my_account" value="1"> My Account
      </label>
      <br>
      <label>
        <input type="checkbox" name="drivers" value="1"> Drivers- Suspand, edit driver,delete
      </label>
      <br>
      <label>
        <input type="checkbox" name="manage_ride" value="1"> Manage Ride
      </label>
      <br>
      <label>
        <input type="checkbox" name="pickup_user" value="1"> Pickup User - Edit, Delete
      </label>
      <br>
      <label>
        <input type="checkbox" name="destination_users" value="1"> Destination Users
      </label>
      <br>
      <label>
        <input type="checkbox" name="price_rate" value="1"> Price Rate KM Modification
      </label>
      <br>
      <label>
        <input type="checkbox" name="reffrel_amount_notification" value="1"> Reffrel Amount Notification
      </label>
      <br>
      <label>
        <input type="checkbox" name="bank_setting" value="1">Bank Setting
      </label>
      <br>
      <button>submit</button>
    </form>

   
</body>
</html>