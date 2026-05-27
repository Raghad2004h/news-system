<?php include 'config/db.php'; ?>

<?php
$message = "";

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$check);

    if(mysqli_num_rows($result) > 0){
        $message = "Email already exists ❌";
    } else {

        $sql = "INSERT INTO users(name,email,password)
                VALUES('$name','$email','$password')";

        mysqli_query($conn,$sql);

        $message = "Account created ✔️";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>

<body>

<div class="center">

    <div class="card">

        <h2>Register</h2>

        <form method="POST">

            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">

            <button class="btn" name="register">Create Account</button>

        </form>

        <p><?= $message ?></p>

        <p>
            Already have account?
            <a href="login.php">Login</a>
        </p>

    </div>

</div>

</body>
</html>