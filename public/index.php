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
    </h1

    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") :
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $major = $_POST['major'];
    $semester = $_POST['semester'];

    if (empty($name) || empty($nim) || empty($major) || empty($semester)) {
        echo "<p>Please fill in all fields.</p>";
    } else {
        echo "<p>Name: " . $name . "</p>";
        echo "<p>Nim: " . $nim . "</p>";
        echo "<p>Major: " . $major . "</p>";
        echo "<p>Semester: " . $semester . "</p>";
    }

    ?>

    <?php else : ?>
    <form method="POST">
        <div>
            <label for="name">Name:</label>
            <br>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="nim">Nim:</label>
            <br>
            <input type="number" id="nim" name="nim">
        </div>

        <div>
            <label for="major">Jurusan:</label>
            <br>
            <input type="text" id="major" name="major">
        </div>

        <div>
            <label for="semester">Semester:</label>
            <br>
            <input type="text" id="semester" name="semester">
        </div>

        <button type="submit">
            Submit
        </button>
    </form>

    <?php endif; ?>


    </body>
    </html>
