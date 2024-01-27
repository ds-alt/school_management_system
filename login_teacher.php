<?php
session_start();
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM teachers WHERE username = '$username'";
    $result = $mysqli->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['teacher_id'] = $row['id'];
            $_SESSION['teacher_username'] = $row['username'];
            $_SESSION['teacher_name'] = $row['name'];

            header('Location: dashboard.php');
            exit();
        } else {
            echo "Incorrect password. Please try again.";
             echo "<script>
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 1000);
              </script>";            
        }
    } else {
        echo "Teacher with that username does not exist.";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 1000);
              </script>";
        
    }
}

$mysqli->close();
?>
