
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2> News System</h2>

        <a href="dashboard.php">🏠 Home</a>
        <a href="add_category.php"> Add Category</a>
        <a href="view_categories.php"> Categories</a>
        <a href="add_news.php"> Add News</a>
        <a href="view_news.php"> View News</a>
        <a href="deleted_news.php"> Deleted</a>
    </div>

    <!-- MAIN -->
    <div class="main">

        <div class="topbar">
            <h1>Dashboard</h1>
            <a class="btn" href="logout.php">Logout</a>
        </div>

        <div class="cards">

            <a class="card" href="add_news.php"> Create News</a>
            <a class="card" href="view_news.php"> Manage News</a>
            <a class="card" href="add_category.php"> Add Category</a>
            <a class="card" href="view_categories.php"> View Categories</a>

        </div>

    </div>

</div>

</body>
</html>