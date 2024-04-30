<?php
session_start();
//kwizera jean felix 222005550

// Connect to database (replace dbname, username, Password with actual credentials)
require_once "databaseconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    $email= $_POST['email'];
    $username= $_POST['username'];
    $Password= $_POST['Password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $permissions = $_POST['permissions'];

    // Validate phone field
    if(empty($phone_number)) {
        echo "Error: phone_number field cannot be empty.";
    } else {
        $sql = "INSERT INTO fuel_admin (email,username, Password, first_name, last_name, phone_number, permissions) VALUES (?, ?, ?, ?, ?, ?,?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssssss", $email,$username, $Password, $first_name, $last_name, $phone_number, $permissions);

        if ($stmt->execute()) {
            echo "Record added successfully.";
            header("Location:login.html");
        } else {
            echo "Error adding record: " . $stmt->error;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['  adm_id'];
    $newemail = $_POST['newemail'];
    $newusername = $_POST['newusername'];
    $newPassword = $_POST['newPassword'];
    $newfirst_name = $_POST['newfirst_name'];
    $newlast_name = $_POST['newlast_name'];
    $newphone_number = $_POST['newphone_number'];
    $newpermissions = $_POST['newpermissions'];

    $sql = "UPDATE fuel_admin SET email=?,username=?, Password=?, first_name=?, last_name=?, phone_number=?, permissions=? WHERE fuel_admin=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssssi", $newemail,$newusername, $newPassword, $newfirst_name, $newlast_name, $newphone_number, $newpermissions, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST[''];

    $sql = "DELETE FROM fuel_admin WHERE adm_id=?";
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
    $id = $_POST['adm_id'];

    // Select user_admin's information from the database
    $sql = "SELECT * FROM fuel_admin WHERE adm_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch and display user_admin information
        $row = $result->fetch_assoc();
        echo "adm_id: " . $row["adm_id"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "username: " . $row["username"] . "<br>";
        echo "Password: " . $row["Password"] . "<br>";
        echo "first_name: " . $row["first_name"] . "<br>";
        echo "last_name: " . $row["last_name"] . "<br>";
        echo "phone_number: " . $row["phone_number"] . "<br>";
        echo "permissions: " . $row["permissions"] . "<br>";
    } else {
        echo "No user found with the provided ID.";
    }
}
?>
