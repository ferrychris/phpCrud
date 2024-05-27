

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
</head>
<body>
    <div class="w-25 mx-auto my-5">
    <a href="users.php"><button name="submit" class="btn btn-primary"
     >Add User</button></a>
    </div>
<div class="w-10 mx-5">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Email</th>
      <th scope="col">Registration Date</th>
      <th scope="col">Password</th>
      <th scope="col">Username</th>
      <th scope="col">Comment</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    include "connect.php";
     $sql = "SELECT * FROM crud";
     $result = mysqli_query($conn, $sql);
     
     if ($result) {
     while($row =mysqli_fetch_assoc($result))
      {
       
       $id  = $row['id'];
       $email  = $row['Email'];
       $regdate = $row['regdate'];
       $password = $row ['password'];
       $username = $row ['username'];
       $comment = $row['Comment'];
       echo'
       <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$email.'</td>
      <td>'.$regdate.'</td>
      <td>'.$password.'</td>
      <td>'.$username.'</td>
      <td>'.$comment.'</td>
      <td>
        <div>
        <a href="edit.php?updateid='.$id.'"><button name="submit" class="btn btn-primary" >Edit User</button></a>
        <a href="delete.php?deleteid='.$id.'"><button name="submit" class="btn btn-danger" >Delete User</button></a>
        </div>
      </td>
    </tr>
      ';
      }}
     
    ?>
    
   
  </tbody>
</table>


</div>
</body>
</html>