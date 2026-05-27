<?php

include 'config/db.php';

if (isset($_POST['add'])) {

    $name = $_POST['name'];

    $sql = "INSERT INTO categories(name)
            VALUES('$name')";

    mysqli_query($conn, $sql);

    echo "Category Added";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1">

    <title>Add Category</title>
</head>

<body>
    <form method="POST">

        <input type="text" name="name">

        <button name="add">Add Category</button>

    </form>
</body>

</html>