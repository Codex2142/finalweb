<?php
include("Koneksi.php");

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST['name']);
    $phone = sanitize_input($_POST['phone']);
    $email = sanitize_input($_POST['email']);
    $address = sanitize_input($_POST['address']);
    $password = sanitize_input($_POST['password']);
    $password_confirmation = sanitize_input($_POST['password_confirmation']);
    $agree = isset($_POST['agree']) ? 1 : 0;

    $errors = [];
    if (empty($name)) {
        $errors[] = "Nama is required.";
    }
    if (empty($phone)) {
        $errors[] = "Nomor Aktif is required.";
    }
    if (empty($email)) {
        $errors[] = "E-mail Aktif is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif ($password !== $password_confirmation) {
        $errors[] = "Passwords do not match.";
    }
    if (!$agree) {
        $errors[] = "You must agree to the terms.";
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO user (name, phone, email, address, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($connection, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $name, $phone, $email, $address, $hashed_password);

            if (mysqli_stmt_execute($stmt)) {
                header("Location: succes.php");
                exit();
            } else {
                echo "Error: Could not execute the query: " . mysqli_error($connection);
            }
        } else {
            echo "Error: Could not prepare the query: " . mysqli_error($connection);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        // Print errors if there are any validation issues
        foreach ($errors as $error) {
            echo "<p class='text-danger'>$error</p>";
        }
    }
}

mysqli_close($connection);
?>
