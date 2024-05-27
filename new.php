<?php
include "connect.php"; // Assuming this file contains database connection settings

$sql = "SELECT * FROM crud";
$result = mysqli_query($conn, $sql);

if ($result) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Email</th>";
            echo "<th>Registration Date</th>";
            echo "<th>Username</th>";
            echo "<th>Password</th>";
            echo "<th>Comment</th>";
            echo "</tr>";
        
            // Loop through each row in the result set
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                // Output the values of each column within <td> elements
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['regdate'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['Comment'] . "</td>";
                echo "</tr>";
            }
            echo "</table>"; "<hr>"; // Adding a horizontal line for better separation
    }
 else {
    // Handle the case where the query fails
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
// mysqli_close($conn);
?>
