<?php

include 'connect.php';
$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $regdate = mysqli_real_escape_string($conn, $_POST['regdate']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    $sql = "UPDATE `crud` SET email='$email', password='$password', regdate='$regdate', username='$username', comment='$comment' WHERE ID=$id";
    $newsql= "SELECT * FROM `crud` where id=$id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);

    $email=$row["email"];
    $password=$row["password"];
    $regdate=$row["regdate"];
    $username=$row["username"];
    $comment=$row["comment"];
    if ($result) {
        echo "Record updated successfully";
        header('location:display.php');
    } else {
        echo "Update unsuccessful";
        die(mysqli_error($conn));
    }
}

?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <div class="w-25 mx-auto my-5">
        <form method="POST">

            <label for="exampleInputEmail">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >



            <label for="pass">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">


            <label for="regdate">Registration Date</label>
            <input type="text" class="form-control" id="regdate" name="regdate" value="<?php echo date("Y-m-d H:i:s");?>" placeholder="24/05/2025">
                                                                                        


            <label for="comment">Comment</label>
            <input type="text" class="form-control" id="comment" name="comment" placeholder="drop a commment">


            <label for="user">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username">

            <button name="submit" class="btn btn-primary my-2">Submit</button>

        </form>


    </div>

</body>
<script>
    function myfunction() {
        console.log("Ferdinard")
    }
</script>

</html>