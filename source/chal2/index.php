<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Challenge 2</title>
    <?php include "../includes/db.php"; ?>
</head>

<body>
    <h1>Welcome, please log in.</h1>

    <!-- The admin user's password is the flag -->

    <form method="POST">
        <input name="username" placeholder="username" type="text">
        <input name="password" placeholder="password" type="password">
        <input type="submit" value="Log in">
    </form>

    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $conn = DB::conn("chal2");
        $query = "SELECT * FROM chal2 WHERE username = '$username' AND password = '$password'";
        echo "SQL Query: <code>" . htmlspecialchars($query) . "</code><br>";

        try {
            $result = $conn->query($query)->fetchAll();

            if (count($result) > 0) {
                echo '<br><b>Well done!</b>';
                echo '<p>The flag is the password! I hope you have it.</p>';
            } else {
                echo "<p>Incorrect username or password.</p>";
            }
        } catch (Exception $e) {
            echo "<p>Invalid SQL query!</p>";
            // I am debugging some errors so i need the error
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    }
    ?>

    <a href="source.php">View source</a>
</body>

</html>
