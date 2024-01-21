<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
    #main{
        width:70%;
        height:90%;
        position: absolute;
        top:7%;
        left:15%;

    }
    #add_role_btn{
        position: relative;
        left:80%;
        margin-bottom:20px;
    }
    a{
      text-decoration:none;
    }
</style>

<body>
    <div id="main" >
        <a  id="add_role_btn" class="btn btn-primary" href="role_permission.php">Add Role And Permissions</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Role</th>
      <th scope="col">action</th>
    </tr>
  </thead>

  <?php
 
 include 'connection.php';

$sql="SELECT * FROM `role_control`";
$res=mysqli_query($conn, $sql);

if($res){
   
     while($row=mysqli_fetch_array($res)){
        $role_id=$row["role_id"];
        $role=$row["role"];

        echo ' <tr>
        <th scope="row">'.$role_id.'</th>
        <td> '.$role.' </td>
        <td>
        <button type="button" class="btn btn-success"> <a href="previlege.php ? previlege='.$role_id.'"
        class="text-light">See privilege</button>
        <button class="btn btn-primary c-white"><a href="updatedata.php ? update='.$role_id.'"
        class="text-light"> update</a></button>
        <button class="btn btn-danger c-white"><a href="delete.php ? delitedid='.$role_id.'"
        class="text-light"> delete</a></button>
        
    </td>
      </tr>';
     }
}

  ?>



</table>

    </div>
</body>
</html>