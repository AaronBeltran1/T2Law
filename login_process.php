<?php
require_once __DIR__ . "/../db.php";

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!$email || !$password) {
    header('Location: index.php?error=missing');
    exit();
}

try {
    $stmt = $pdo->prepare("SELECT id, name, password FROM accounts WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($password, $user['password'])) {
        header('Location: index.php?error=invalid');
        exit();
    }

    // secure session cookie settings
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'); // true if site uses HTTPS
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'],
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    session_start();
    session_regenerate_id(true); // prevent session fixation

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];

    // Redirect to protected page
    header('Location: LoginSuccess.php');
    exit();

} catch (PDOException $e) {
    // Debug only (remove in production)
    die("Database error: " . $e->getMessage());
}
