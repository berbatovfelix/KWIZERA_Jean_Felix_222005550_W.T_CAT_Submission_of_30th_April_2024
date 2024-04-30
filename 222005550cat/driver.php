<?php
//kwizera jean felix april 2024
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; //this is empty because I didn't set any password
$dbname = "kwizera_jean_felix_fdamp";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM driver";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>The Information about driver</title>";
    echo "<h1>The Information about driver</h1>";
    echo "<table border='1'>
            <tr>
            <th>driver_id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>phone</th>
            <th>licence_number</th>
            <th>vehicle_id</th>
        </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
         echo "<td>" . $row["driver_id"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["licence_number"] . "</td>";
        echo "<td>" . $row["vehicle_id"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No information found";
}

// Close the database connection
$conn->close();
?>
