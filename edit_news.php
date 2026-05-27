<?php

include 'config/db.php';

$id = $_GET['id'];

$get = mysqli_query(
    $conn,
    "SELECT * FROM news WHERE id='$id'"
);

$row = mysqli_fetch_assoc($get);

if (isset($_POST['update'])) {

    $title = $_POST['title'];
    $details = $_POST['details'];

    $sql = "UPDATE news
            SET title='$title',
            details='$details'
            WHERE id='$id'";

    mysqli_query($conn, $sql);

    header("Location:view_news.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1">
    <title>Edit News</title>
</head>

<body>
    <form method="POST">

        <input type="text" name="title" value="<?= $row['title'] ?>">

        <textarea name="details">
<?= $row['details'] ?>
</textarea>

        <button name="update">Update</button>

    </form>
</body>

</html>