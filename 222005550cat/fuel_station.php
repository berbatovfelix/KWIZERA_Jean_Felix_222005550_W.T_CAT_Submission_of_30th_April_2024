<?php
                // Database connection parameters
                $servername = "localhost";
                $username = "root";
                $password = "";//this is empty because I din't set any password
                $dbname = "kwizera_jean_felix_fdamp";


                // Create database connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check database connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

$sql = "SELECT * FROM fuel_station";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>The Information about fuel_station</title>";
    echo "<h1>The Information about fuel_station</h1>";
    echo "<table border='1'>
            <tr>
                <th>fuelsta_id</th>
                <th>name</th>
                <th>address</th>
               <th>phone</th>
                <th>fuel_type</th>
            </tr>";

     //kwizera jean felix 222005550 april 2024

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fuelsta_id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["fuel_type"] . "</td>";
       
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "no information found";
}

$conn->close();
?>
