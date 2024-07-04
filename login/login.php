<?php
include("./../config/connection.php");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_POST["LOGIN"])) {
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];

    // Prepare statement
    $stmt = $koneksi->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, check password
        $user = $result->fetch_assoc();
        $hashedPassword = $user['password'];

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct
            echo "Login successful! Redirect or handle session here.";
        } else {
            // Password is incorrect
            echo "Invalid email or password. Please try again.";
        }
    } else {
        // User not found
        echo "Invalid email or password. Please try again.";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$koneksi->close();
?>
