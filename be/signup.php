<?php
$usersFile = 'users.json';

// Check if users.json file exists, and load existing user data
if (file_exists($usersFile)) {
    $usersJson = file_get_contents($usersFile);
    $users = json_decode($usersJson, true);
} else {
    $users = [];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $sex = isset($_POST['sex']) ? ($_POST['sex'] === 'm' ? 'Male' : 'Female') : '';
    $language = $_POST['language'];
    $isHuman = isset($_POST['cbcaptcha']) ? true : false;

    

   
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists, please choose another.'); window.location = '../pages/signup-page.php';</script>";
            exit;
        }
    }

    
    $newUser = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'username' => $username,
        'email' => $email,
        'dob' => $dob,
        'password' => $password,
        'sex' => $sex,
        'language' => $language,
        'isHuman' => $isHuman
    ];

  
    $users[] = $newUser;

    file_put_contents($usersFile, json_encode($users));

echo "<script>alert('Registration successful.'); window.location.href = '../pages/login-page.php';</script>";
}
?>
