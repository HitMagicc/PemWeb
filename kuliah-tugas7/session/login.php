<?php
session_start();
include "koneksi.php";

$error = '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM "user" WHERE "username" = $1 AND "password" = $2';
    $result = pg_query_params($conn, $sql, array($username, $password));

    if (pg_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
pg_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if ($error) { echo "<p style='color:red;'>$error</p>"; } ?>

    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
