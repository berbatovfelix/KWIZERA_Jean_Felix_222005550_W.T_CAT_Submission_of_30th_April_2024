<?php
session_start();

// Connect to database (replace dbname, username, password with actual credentials)
require_once "databaseconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $fuel_type = $_POST['fuel_type'];
    // Assuming fuelsta_id is auto-incremented, so no need to bind it
    $sql = "INSERT INTO fuel_station (name, address, phone, fuel_type) VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssss", $name, $address, $phone, $fuel_type);

    if ($stmt->execute()) {
        echo "Record added successfully.";
    } else {
        echo "Error adding record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['fuelsta_id'];
    $newname = $_POST['newname'];
    $newaddress = $_POST['newaddress'];
    $newphone = $_POST['newphone'];
    $newfuel_type = $_POST['newfuel_type'];

    $sql = "UPDATE fuel_station SET name=?, address=?, phone=?, fuel_type=? WHERE fuelsta_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssi", $newname, $newaddress, $newphone, $newfuel_type, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['fuelsta_id'];

    $sql = "DELETE FROM fuel_station WHERE fuelsta_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['read'])) {
    // Assuming the form contains fuelsta_id
    $id = $_POST['fuelsta_id'];

    $sql = "SELECT * FROM fuel_station WHERE fuelsta_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "fuelsta_id: " . $row["fuelsta_id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
        echo "Fuel Type: " . $row["fuel_type"] . "<br>";
    } else {
        echo "No fuel station found with the provided ID.";
    }
}
?>
