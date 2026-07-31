
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>

<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header("Location: dashboard.php");
        exit;
    }
?>

    <form method="POST">
        <div>
            <label for="username">Username</label>
            <br>
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <button type="submit">
            Submit
        </button>
    </form>

</body>
</html>
