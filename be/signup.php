<?php
$usersfile='users.json';
if (file_exists($usersfile)){
    $usersJson=file_get_contents($usersfile);
    $users=json_decode($usersJson,true);
}else{
    $users=[];
}
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['birthdate'];

    foreach ($users as $user) {
        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists, please choose another.'); window.location = '../frontend/signup.html';</script>";
            exit;
        }
    }

    $users[] = [
        'username' => $username,
        'password' => $password,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'gender' => $gender,
        'dob' => $dob
    ];

    file_put_contents($usersFile, json_encode($users));


    echo "<script>alert('Registration successful.'); window.location = '../index.html';</script>";
}
?>