<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Challenge 1</title>
    <?php include "../includes/db.php"; ?>
</head>

<body>
    <h1>Welcome, please log in.</h1>

    <!-- Hmm... i am not sure if this is secure... -->
    <!-- The 'admin' might be mad at me -->

    <form method="POST">
        <input name="username" placeholder="username" type="text">
        <input name="password" placeholder="password" type="password">
        <input type="submit" value="Log in">
    </form>

    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $conn = DB::conn("chal1");
        $query = "SELECT * FROM chal1 WHERE username = '$username' AND password = '$password'";
        echo "SQL Query: <code>" . htmlspecialchars($query) . "</code><br>";

        try {
            $result = $conn->query($query)->fetchAll();

            if (count($result) > 0) {
                echo '<br><b>Well done!</b>';
                echo '<p>The flag is: HKN{sql_1nj3c71on_ninj4__b018a}';
                echo '<br><p>You are now ready for the <a href="/chal2">next challenge</a></p>';
            } else {
                echo "<p>Incorrect username or password.</p>";
            }
        } catch (Exception $e) {
            echo "<p>Invalid SQL query!</p>";
        }
    }
    ?>

    <a href="source.php">View source</a>
</body>

</html>