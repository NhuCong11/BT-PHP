<?php
session_start();
$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $_SESSION['user'] = $row; // Store user data in session
            header('Location: Order.php'); // Redirect to dashboard after successful login
            exit();
        }
    } else {
        echo '<script>
        alert("Tài khoản hoặc mật khẩu không đúng");
        </script>';
        header('Location: login.php');
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../assets/images/CuaHang/favicon-32x32-1.png" type="image/x-icon">
</head>

<body>

    <!-- Animated Wave Background  -->
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <!-- Log In Form Section -->
    <section>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="" method="POST">
                    <h1>Sign Up</h1>
                    <span>Or use your Email for registration</span>
                    <label>
                        <input type="text" name="name" placeholder="Name" />
                    </label>
                    <label>
                        <input type="email" name="email" placeholder="Email" />
                    </label>
                    <label>
                        <input type="password" name="password" placeholder="Password" />
                    </label>
                    <input class="inputSignUp" id="inputSignUp" type="submit" value="Sign Up" name="signUp" style="margin-top: 9px; Width: 150px;">
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="" method="POST">
                    <h1>Sign in</h1>
                    <span> Or sign in using E-Mail Address</span>
                    <label>
                        <input type="email" name="email" placeholder="Email" />
                    </label>
                    <label>
                        <input type="password" name="password" placeholder="Password" />
                    </label>
                    <a href="#">Forgot your password?</a>
                    <input class="inputSignIn" id="inputSignIn" type="submit" value="Sign In" name="signIn" style="margin-top: 9px; Width: 150px">
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Log in</h1>
                        <p>Sign in here if you already have an account </p>
                        <button class="ghost mt-5" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Create, Account!</h1>
                        <p>Sign up if you still don't have an account ... </p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../javascript/login.js"></script>
</body>
< /html>