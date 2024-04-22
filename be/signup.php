<?php
$usersFile = 'users.json';

// Check if users.json file exists, and load existing user data
if (file_exists($usersFile)) {
    $usersJson = file_get_contents($usersFile);
    $users = json_decode($usersJson, true);
} else {
    $users = [];
}

// Check if the HTTP method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data from POST request
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $sex = isset($_POST['sex']) ? ($_POST['sex'] === 'm' ? 'Male' : 'Female') : '';
    $language = $_POST['language'];
    $isHuman = isset($_POST['cbcaptcha']) ? true : false;

    // Validate form data here as needed

    // Check if username already exists
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists, please choose another.'); window.location = '../pages/signup-page.php';</script>";
            exit;
        }
    }

    // Create new user object
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

    // Add new user to users array
    $users[] = $newUser;

    // Save updated users array back to JSON file
    file_put_contents($usersFile, json_encode($users));

    // Redirect user to success page after registration
    echo "<script>alert('Registration successful.'); window.location = '../pages/home.php';</script>";
}
?>
