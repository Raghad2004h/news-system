<?php include 'config/db.php'; session_start(); ?>

<?php
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];

        header("Location: dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>

<body>

<div class="center">

    <div class="card">

        <h2>Login</h2>

        <form method="POST">

            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">

            <button class="btn" name="login">Login</button>

        </form>

        <p>
            No account?
            <a href="register.php">Register</a>
        </p>

    </div>

</div>

</body>
</html>