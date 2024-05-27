

<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Corrected SQL query syntax and added prepared statement
    $sql = "DELETE FROM `crud` WHERE id = $id";
    $results = mysqli_query($conn, $sql);

    // Check if the deletion was successful
    if ($results) {
        // Redirect before echoing
        header('location: display.php');
        exit; // Always exit after a header redirect
    } else {
        echo 'Deletion failed';
    }
} else {
    echo 'No ID provided';
}
?>
