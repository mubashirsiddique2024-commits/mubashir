<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
     <title>Login | Discover Pakistan</title>
</head>
<body>
<div class="for_xy_center">
    <div class="sm_cont">
        <div class="nav_logo">
            <h1>DISCOVER</h1>
            <p>PAKISTAN</p>
        </div>

        <form method="POST">
            <label>Email</label>
            <input type="text" name="email" placeholder="Type your email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Type your password" required>

            <button type="submit">Login</button>
        </form>

        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user already exists
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check);

    if(mysqli_num_rows($result) > 0){
        echo "User already exists!";
    } else {
        // Insert into database
        $insert = "INSERT INTO users (email,password) VALUES ('$email','$password')";
        if(mysqli_query($conn, $insert)){
            echo "Registered successfully!";
        } else {
            echo "Error!";
        }
    }
}
        ?>
    </div>
</div>
</body>
</html>