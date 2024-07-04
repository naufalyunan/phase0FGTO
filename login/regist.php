<?php
    include("./../config/connection.php");

    if($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    if (isset($_POST["REGISTER"])) {
        $name = $_POST['name'];
        $email = $_POST['register-email'];
        $password = $_POST['register-password'];
        $confirmPassword = $_POST['confirm-register-password'];

        // Check if passwords match
        if ($password !== $confirmPassword) {
            die("Password and Confirm Password do not match.");
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $privilege = 'user';  // Default privilege

        $stmt = $koneksi->prepare("INSERT INTO users (name, email, password, privilege) VALUES (?, ?, ?, ?)");
        if($stmt === false) {
            die("Error preparing statement: " . $koneksi->error);
        }

        $stmt->bind_param("ssss", $name, $email, $hashedPassword, $privilege);

        if ($stmt->execute()) {
            echo "Create User Berhasil";
        } else {
            echo "Create User Gagal: " . $stmt->error;
        }

        $stmt->close();
    }

    $koneksi->close();
?>
