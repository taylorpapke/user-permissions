<?php
// index.php
session_start();
include 'data.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    
    // Fetch user by username
    $user = getUserByUsername($username);
    
    if ($user) {
        // Store user info in session
        $_SESSION['username'] = $user['UserName'];
        $_SESSION['permissions'] = $user['Permissions'];
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <button type="submit">Login</button>
    </form>
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>