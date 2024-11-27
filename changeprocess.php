<?php
include "config.php";

// Retrieve and sanitize user inputs
$phone_number = $conn->real_escape_string($_POST['edit_number']);
$password = $_POST['edit_password'];
$cpassword = $_POST['edit_cpassword'];

// Check if passwords match
if ($password === $cpassword) {

    // Prepare a statement to check if the user exists
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE phone_number = ?");
    $stmt->bind_param("s", $phone_number);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any row is returned
    if ($result->num_rows > 0) {
        // User already exists
        echo "User already exists.";
        header("Location: changepassword.php");
        exit();
    } else {
        // User does not exist; proceed with password update
        $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hash the new password for security

        // Prepare the SQL statement to update the password
        $stmt = $conn->prepare("UPDATE tbl_users SET password = ? WHERE phone_number = ?");
        $stmt->bind_param("ss", $hashed_password, $phone_number);

        if ($stmt->execute()) {
            echo "Password updated successfully.";
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // Close the statement
    $stmt->close();
} else {
    // Passwords do not match
    echo "Passwords do not match.";
    header("Location: changepassword.php");
    exit();
}

// Close the database connection
$conn->close();
?>
