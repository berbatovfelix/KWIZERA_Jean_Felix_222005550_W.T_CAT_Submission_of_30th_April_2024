<?php
require_once "databaseconnection.php";

if (isset($_GET['query'])) {
    $searchTerm = $connection->real_escape_string($_GET['query']);
    $output = "";

    $queries = [
        'banks' => "SELECT banks_id, name, address, phone_number, account_number, bankname FROM banks WHERE banks_id LIKE '%$searchTerm%'",
        'customer' => "SELECT customer_id,last_name, first_name,    email, phone, address, payment_method FROM customer WHERE customer_id LIKE '%$searchTerm%'",
        'driver' => "SELECT driver_id,first_name, last_name, phone, licence_number, vehicle_id FROM driver WHERE driver_id LIKE '%$searchTerm%'",
        'fuel_admin' => "SELECT adm_id , username, email, Password, first_name, last_name, phone_number, permissions FROM fuel_admin WHERE adm_id LIKE '%$searchTerm%'",
        'fuel_station' => "SELECT fuelsta_id, name, address, phone, fuel_type FROM fuel_station WHERE fuelsta_id LIKE '%$searchTerm%'",
        'fuel_suppler' => "SELECT fuelsup_id, last_name, first_name, email, address, phone_number FROM fuel_suppler WHERE fuelsup_id LIKE '%$searchTerm%'"
    ];

    echo "<h2><u>Search Results:</u></h2>";

    foreach ($queries as $table => $sql) {
        $result = $connection->query($sql);
        $output .= "<h3>Table of $table:</h3>";
        
        if ($result) {
            if ($result->num_rows > 0) {
                $output .= "<ul>";
                while ($row = $result->fetch_assoc()) {
                    $output .= "<li>";
                    foreach ($row as $key => $value) {
                        $output .= "$key: $value, ";
                    }
                    $output .= "</li>";
                }
                $output .= "</ul>";
            } else {
                $output .= "<p>No results found in $table matching the search term: '$searchTerm'</p>";
            }
        } else {
            $output .= "<p>Error executing query: " . $connection->error . "</p>";
        }
    }

    echo $output;

    $connection->close();
} else {
    echo "<p>No search term was provided.</p>";
}
?>