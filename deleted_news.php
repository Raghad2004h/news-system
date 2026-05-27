<?php

include 'config/db.php';

$sql = "SELECT * FROM news
        WHERE status='deleted'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    echo $row['title'];
    echo "<br>";
}
?>