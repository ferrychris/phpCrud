<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $regdate = $_POST['regdate'];
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `crud` (Email, regdate, username, Comment, password) 
            VALUES ('$email', '$regdate', '$username', '$password', '$comment')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Connection inserted successfully";
        header('location:display.php');
    } else {
        echo "Connection unsuccessful";
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

            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">



            <label for="pass">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>


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

</html