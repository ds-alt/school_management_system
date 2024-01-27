<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System - Teacher Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-primary">Teacher Login</h2>
        <form action="login_teacher.php" method="POST">
            <div class="form-group">
                <label for="login_username">Username:</label>
                <input type="text" class="form-control" name="username" id="login_username" required>
            </div>
            <div class="form-group">
                <label for="login_password">Password:</label>
                <input type="password" class="form-control" name="password" id="login_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>            
            <a href="register_teacher.php" class="button-link">Register</a>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
