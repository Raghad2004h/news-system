<?php

session_start();

include 'config/db.php';

if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $details = $_POST['details'];

    $image = $_FILES['image']['name'];

    move_uploaded_file(
        $_FILES['image']['tmp_name'],
        "images/" . $image
    );

    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO news
    (title,category_id,details,image,user_id)
    VALUES
    ('$title','$category_id','$details','$image','$user_id')";

    mysqli_query($conn, $sql);

    echo "News Added";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1">
    <title>Add news</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">

        <input type="text" name="title" placeholder="Title">

        <br><br>

        <select name="category_id">

            <?php

            $cat = mysqli_query($conn, "SELECT * FROM categories");

            while ($c = mysqli_fetch_assoc($cat)) {
                ?>

                <option value="<?= $c['id'] ?>">
                    <?= $c['name'] ?>
                </option>

            <?php } ?>

        </select>

        <br><br>

        <textarea name="details"></textarea>

        <br><br>

        <input type="file" name="image">

        <br><br>

        <button name="add">Add News</button>

    </form>
</body>

</html>


