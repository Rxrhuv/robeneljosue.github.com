<?php
session_start();

// Example credentials for demonstration purposes
$valid_username = 'user';
$valid_password = 'password';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit();
    } else {
        echo "<p style='color: black; text-align: center; font-size: 40px '>Invalid username or password. Please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Center content vertically */
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgba(0, 0, 0, 0.25) url('images/banner.jpg') no-repeat center center fixed; /* Adjust opacity */
            background-size: cover;
        }
        .login-container {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 300px;
            text-align: center;
        }
        .login-container h1 {
            margin: 0;
            font-size: 100px; /* Increased font size */
            font-family: 'Brush Script MT', cursive;
/* Changed font family */
            color: black; /* Changed font color */
            margin-bottom: 20px;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="color: black; font-size: 100px; font-family: cursive; margin-bottom: 20px;">Pinoy Recipes</h1>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
