<?php

include 'config/db.php';

$sql = "SELECT * FROM categories";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

    echo $row['name'];

    echo "<br>";
}
?>