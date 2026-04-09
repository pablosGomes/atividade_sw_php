<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../login.html");
    exit;
}
$nome = htmlspecialchars($_SESSION['nome']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá <?php echo $nome; ?></title>
</head>
<body>
    <h1>Olá, <?php echo $nome; ?>!</h1>
    <p>Esta é a página principal restrita após login.</p>
    <a href="logout.php">Logout</a>
</body>
</html>