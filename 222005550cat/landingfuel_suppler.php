<?php
session_start();
//<!--kwizera jean felix 222005550--->
// Connect to database (replace dbname, username, password with actual credentials)
require_once "databaseconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];

        $sql = "INSERT INTO fuel_suppler (last_name, first_name, email, address, phone_number) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssss", $last_name, $first_name, $email, $address, $phone_number);


    if ($stmt->execute()) {
        echo "Record added successfully.";
    } else {
        echo "Error adding record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
 $id = $_POST['id'];
        $newlast_name = $_POST['newlast_name'];
        $newfirst_name = $_POST['newfirst_name'];
        $newemail = $_POST['newemail'];
        $newaddress = $_POST['newaddress'];
        $newphone_number = $_POST['newphone_number'];

        $sql = "UPDATE fuel_suppler SET fuel_suppler=?, last_name=?, first_name=?, email=?, address=?,phone_number WHERE fuelsup_id=?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssss", $newlast_name, $newfirst_name, $newemail, $newaddress, $newphone_number, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['fuelsup_id'];

    $sql = "DELETE FROM fuel_suppler WHERE fuelsup_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['read'])) {
    // Assuming the session contains room_id
    $id = $_POST['fuelsup_id'];

    // Select user_room's information from the database
    $sql = "SELECT * FROM fuel_suppler WHERE fuelsup_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch and display user_room information
        $row = $result->fetch_assoc();
        echo "fuelsup_id: " . $row["fuelsup_id"] . "<br>";
        echo "last_name: " . $row["last_name"] . "<br>";
    echo "first_name: " . $row["first_name"] . "<br>";
    echo "email: " . $row["email"] . "<br>";
    echo "address: " . $row["address"] . "<br>";
    echo "phone_number: ".$row["phone_number"] . "<br>";
    } else {
        echo "No user found with the provided ID.";
    }
}


?>