<?php
session_start();
//kwizera jean felix 222005550

// Connect to database (replace dbname, username, password with actual credentials)
require_once "databaseconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment_method'];

    // Validate phone field
    if(empty($phone)) {
        echo "Error: Phone field cannot be empty.";
    } else {
        $sql = "INSERT INTO customer (last_name, first_name, email, phone, address, payment_method) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssssss", $last_name, $first_name, $email, $phone, $address, $payment_method);

        if ($stmt->execute()) {
            echo "Record added successfully.";
            header("Location:index.html");
        } else {
            echo "Error adding record: " . $stmt->error;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['customer_id'];
    $newlast_name = $_POST['newlast_name'];
    $newfirst_name = $_POST['newfirst_name'];
    $newemail = $_POST['newemail'];
    $newphone = $_POST['newphone'];
    $newaddress = $_POST['newaddress'];
    $newpayment_method = $_POST['newpayment_method'];

    $sql = "UPDATE customer SET last_name=?, first_name=?, email=?, phone=?, address=?, payment_method=? WHERE customer_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssssi", $newlast_name, $newfirst_name, $newemail, $newphone, $newaddress, $newpayment_method, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['customer_id'];

    $sql = "DELETE FROM customer WHERE customer_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['read'])) {
    // Assuming the session contains customer_id
    $id = $_POST['customer_id'];

    // Select user_admin's information from the database
    $sql = "SELECT * FROM customer WHERE customer_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch and display user_admin information
        $row = $result->fetch_assoc();
        echo "customer_id: " . $row["customer_id"] . "<br>";
        echo "Last Name: " . $row["last_name"] . "<br>";
        echo "First Name: " . $row["first_name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "Payment Method: " . $row["payment_method"] . "<br>";
    } else {
        echo "No user found with the provided ID.";
    }
}
?>
