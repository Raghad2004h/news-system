<?php

include 'config/db.php';

$id = $_GET['id'];

$sql = "UPDATE news
        SET status='deleted'
        WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location:view_news.php");

?>