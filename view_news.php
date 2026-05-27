<?php

include 'config/db.php';

$sql = "SELECT * FROM news
        WHERE status='active'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>View News</title>
</head>
<body>
     <h3><?= $row['title'] ?></h3>

<p><?= $row['details'] ?></p>

<img src="images/<?= $row['image'] ?>" width="200">

<br><br>

<a href="delete_news.php?id=<?= $row['id'] ?>">
Delete
</a>

<a href="edit_news.php?id=<?= $row['id'] ?>">
Edit
</a>

<hr>

<?php } ?>   
</body>
</html>