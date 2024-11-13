<?php
// dashboard.php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
$permissions = $_SESSION['permissions'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>Your role: <strong><?php echo htmlspecialchars($permissions); ?></strong></p>

    <?php if ($permissions === 'admin'): ?>
        <h3>Admin Content</h3>
        <p>This content is only accessible to administrators.</p>
    <?php elseif ($permissions === 'editor'): ?>
        <h3>Editor Content</h3>
        <p>This content is accessible to editors and administrators.</p>
    <?php else: ?>
        <h3>Viewer Content</h3>
        <p>This content is accessible to all users.</p>
    <?php endif; ?>

    <a href="logout.php">Logout</a>
</body>
</html>