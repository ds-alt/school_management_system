<?php
session_start();
include('db_connection.php');

// Check if the teacher is logged in
if (!isset($_SESSION['teacher_id'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentID = $_POST['studentID'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];

    $sql = "INSERT INTO students (studentID, name, age, class) VALUES ('$studentID', '$name', '$age', '$class')";

    if ($mysqli->query($sql) === TRUE) {
        // Display success message
        echo "Student added successfully.";

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
