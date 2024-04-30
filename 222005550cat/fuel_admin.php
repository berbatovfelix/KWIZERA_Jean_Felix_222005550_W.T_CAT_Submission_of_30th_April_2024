<?php

//kwizera jean felix 222005550 april 2024
                // Database connection parameters

                $servername = "localhost";
                $username = "root";
                $password= "";//this is empty because I din't set any password
                $dbname = "kwizera_jean_felix_fdamp";


                // Create database connection
                $conn = new mysqli($servername, $username,$password, $dbname);

                // Check database connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

$sql = "SELECT * FROM fuel_admin";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>The Information about customer</title>";
    echo "<h1>The Information about customer</h1>";
    echo "<table border='1'>
            <tr>
                <th>adm_id</th>
                <th>email</th>
                <th>username</th>
                <th>Password</th>
               <th>first_name</th>
                <th>last_name</th>
                <th>phone_number</th>
                <th>permissions </th>
            </tr>";

     //kwizera jean felix 222005550 april 2024

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["adm_id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["Password"] . "</td>";
       echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["permissions"] . "</td>";
       
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "no information found";
}

//kwizera april 2024

$conn->close();
?>
