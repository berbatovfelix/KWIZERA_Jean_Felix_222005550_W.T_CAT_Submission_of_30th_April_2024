<?php
session_start();
// Connect to database (replace dbname, username, password with actual credentials)
require_once "databaseconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $licence_number = $_POST['licence_number'];
        $vehicle_id = $_POST['vehicle_id'];

        $sql = "INSERT INTO driver (first_name, last_name, phone, licence_number, vehicle_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssss", $first_name, $last_name, $phone, $licence_number, $vehicle_id);

        if ($stmt->execute()) {
            echo "Record added successfully.";
        } else {
            echo "Error adding record: " . $stmt->error;
        }
    } elseif (isset($_POST['update'])) {
        $id = $_POST['driver_id'];
        $new_first_name = $_POST['newfirst_name'];
        $new_last_name = $_POST['newlast_name'];
        $new_phone = $_POST['newphone'];
        $new_licence_number = $_POST['newlicence_number'];
        $new_vehicle_id = $_POST['newvehicle_id'];

        $sql = "UPDATE driver SET first_name=?, last_name=?, phone=?, licence_number=?, vehicle_id=? WHERE driver_id=?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssssi", $new_first_name, $new_last_name, $new_phone, $new_licence_number, $new_vehicle_id, $id);

        if ($stmt->execute()) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['driver_id'];

        $sql = "DELETE FROM driver WHERE driver_id=?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
    } elseif (isset($_POST['read'])) {
        $id = $_POST['driver_id'];

        $sql = "SELECT * FROM driver WHERE driver_id=?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Display retrieved data
            echo "Driver ID: " . htmlspecialchars($row["driver_id"]) . "<br>";
            echo "First Name: " . htmlspecialchars($row["first_name"]) . "<br>";
            echo "Last Name: " . htmlspecialchars($row["last_name"]) . "<br>";
            echo "Phone: " . htmlspecialchars($row["phone"]) . "<br>";
            echo "Licence Number: " . htmlspecialchars($row["licence_number"]) . "<br>";
            echo "Vehicle ID: " . htmlspecialchars($row["vehicle_id"]) . "<br>";
        } else {
            echo "No driver found with the provided ID.";
        }
    }
}
?>
