<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];

    $sql = "INSERT INTO teachers (username, password, name) VALUES ('$username', '$password', '$name')";

    if ($mysqli->query($sql) === TRUE) {
        // Use JavaScript to display success message and redirect after 2 seconds
         // Display success message
         echo "Registration successful. <br/>You will be automatically redirected to login.";

         // Use JavaScript to wait for 2 seconds and then redirect to the dashboard
         echo "<script>
                 setTimeout(function() {
                     window.location.href = 'dashboard.php';
                 }, 2000);
               </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System - Teacher Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">        
        
        <h2 class="text-primary">Teacher Registration</h2>
        <form action="register_teacher.php" method="POST">
            <div class="form-group">
                <label for="register_username">Username:</label>
                <input type="text" class="form-control" name="username" id="register_username" required>
            </div>
            <div class="form-group">
                <label for="register_password">Password:</label>
                <input type="password" class="form-control" name="password" id="register_password" required>
            </div>
            <div class="form-group">
                <label for="register_name">Name:</label>
                <input type="text" class="form-control" name="name" id="register_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="index.php" class="button-link">Login</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
