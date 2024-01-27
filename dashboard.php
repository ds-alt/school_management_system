<?php
session_start();

// Check if the teacher is logged in
if (!isset($_SESSION['teacher_id'])) {
    header('Location: index.php');
    exit();
}

include('db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-primary">Welcome, <?php echo $_SESSION['teacher_name']; ?>!</h2>
        <p>Username: <?php echo $_SESSION['teacher_username']; ?></p>

        <hr>

        <h2 class="text-primary">Add New Student</h2>
        <form action="add_student.php" method="POST">
            <div class="form-group">
                <label for="studentID">Student ID:</label>
                <input type="text" class="form-control" name="studentID" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" name="age" required>
            </div>
            <div class="form-group">
                <label for="class">Class:</label>
                <input type="text" class="form-control" name="class" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
            <a href="display_students.php" class="button-link">Students List</a>
        </form>

        <hr>
        <p><a href="logout_teacher.php" class="btn btn-danger">Logout</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
