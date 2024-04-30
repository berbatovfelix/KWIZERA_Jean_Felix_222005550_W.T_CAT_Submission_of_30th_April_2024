<?php
session_start();

// Connect to database (replace dbname, username, password with actual credentials)
require_once "databaseconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $account_number = $_POST['account_number'];
    $bankname= $_POST["bankname"];

    $sql = "INSERT INTO banks (name, address, phone_number, account_number, bankname) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssss", $name, $address, $phone_number, $account_number, $bankname);

    if ($stmt->execute()) {
        echo "Record added successfully.";
    } else {
        echo "Error adding record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['banks_id'];
    $newname = $_POST['newname'];
    $newaddress = $_POST['newaddress'];
    $newphone_number = $_POST['newphone_number'];
    $newaccount_number = $_POST['newaccount_number'];
    $newbankname = $_POST['newbankname'];

    $sql = "UPDATE banks SET name=?, address=?, phone_number=?, account_number=?, bankname=? WHERE banks_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssssi", $newname, $newaddress, $newphone_number, $newaccount_number, $newbankname, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['banks_id'];

    $sql = "DELETE FROM banks WHERE banks_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['read'])) {
    // Assuming the session contains bank_id
    $id = $_POST['banks_id'];

    // Select bank's information from the database
    $sql = "SELECT * FROM banks WHERE banks_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch and display bank information
        $row = $result->fetch_assoc();
        echo "bank_id: " . $row["banks_id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "Phone Number: " . $row["phone_number"] . "<br>";
        echo "Account Number: " . $row["account_number"] . "<br>";
        echo "Bank Name: " . $row["bankname"] . "<br>";
    } else {
        echo "No bank found with the provided ID.";
    }
}
?>
