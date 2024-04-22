<?php
session_start();

$usersfile = 'users.json';

if (file_exists($usersfile)) {
    $usersJson = file_get_contents($usersfile);
    $users = json_decode($usersJson, true);
} else {
    $users = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];

            header('Location: ../frontend/index.php');
            exit;
        }
    }

    
    echo "<script>alert('Invalid username or password.'); window.location = 'index.html';</script>";
}
?>
