<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['Nama'];
        echo "<h2>Hello, $nama</h2>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Registration</title>
</head>
<body>
    <h1>
        Student Registration
    </h1>

    <form method="POST">
        <div>
            <label for="Nama">Nama : </label>
            <br>
            <input type="text" name="Nama">
        </div>

        <button type="submit">
            Submit
        </button>
    </form>

</body>
</html>
