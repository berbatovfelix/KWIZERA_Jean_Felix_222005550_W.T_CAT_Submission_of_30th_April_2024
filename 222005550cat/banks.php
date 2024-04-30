<?php
//kwizera jean felix 222005550 april 2024
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

$sql = "SELECT * FROM banks";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>The Information about banks</title>";
    echo "<h1>The Information about banks</h1>";
    echo "<table border='1'>
           <tr>
            <th>banks_id</th>
            <th>name</th>
            <th>address</th>
            <th>phone_number</th>
            <th>account_number</th>
            <th>bankname</th>
        </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["banks_id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["account_number"] . "</td>";
        echo "<td>" . $row["bankname"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "no information found";
}

$conn->close();
?>
