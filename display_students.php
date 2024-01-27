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
       
        <h2 class="text-primary">Student List</h2>
        <?php
        // Include the database connection file
        include('db_connection.php');

        // Perform SQL select
        $sql = "SELECT * FROM students";
        $result = $mysqli->query($sql);

        // Check if there are any results
        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Class</th>
                </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["class"] . "</td>
                  </tr>";
            }

            echo "</table>";
        } else {
            echo "No records found";
        }

        // Close the database connection
        $mysqli->close();
        ?>

        <hr>
        <a href="logout_teacher.php" class="btn btn-danger">Logout</a>
        <a href="dashboard.php" class="button-link">Add Stidents</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
