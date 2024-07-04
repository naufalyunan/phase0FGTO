<?php
    include("./../config/connection.php");

    if($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    if (isset($_POST["MESSAGE"])) {
        $message_name = $_POST['message-name'];
        $message_email = $_POST['message-email'];
        $phone = $_POST['message-phone'];
        $subject = $_POST['message-subject'];
        $message = $_POST['message-content'];


        $stmt = $koneksi->prepare("INSERT INTO contact_us (name, email, phone_number, subject, message) VALUES (?, ?, ?, ?, ?)");
        if($stmt === false) {
            die("Error preparing statement: " . $koneksi->error);
        }

        $stmt->bind_param("sssss", $message_name, $message_email, $phone, $subject, $message);

        if ($stmt->execute()) {
            echo "Create Message Berhasil";
        } else {
            echo "Create Message Gagal: " . $stmt->error;
        }

        $stmt->close();
    }

    $koneksi->close();
?>
