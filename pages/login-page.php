<!DOCTYPE html>
<html lang="en">
<head>
    <title>Karim Itani - Portfolio - Login</title>
    <link rel="stylesheet" href="../css/Styling.css">
    <link rel="stylesheet" href="../css/icons.css">
</head>
<body>

<div class="title">
    <span>Log-In!</span>
</div>

<div class="paragraph" style="border:0;">
    <form action="../be/login.php" method="POST" name="login-form">
        <label for="un">Username</label>
        <br>
        <input type="text" name="username" class="txtfield">
        <br>
        <label for="pass">Password</label>
        <br>
        <input type="password" name="password" class="txtfield">
        <br>
        <label for="cbcaptcha">I am human</label>
        <input type="checkbox" name="cbcaptcha" id="cbcaptcha">
        <br>
        <br>
        <input type="button" value="Log In" class="button" onclick="Login()">
        <input type="button" value="Clear" class="button" onclick="ClearForm()">
    </form>
</div>

<script>
function Login() {
    var Form = document.querySelector("form[name='login-form']");
    var captchaChecked = Form.elements["cbcaptcha"].checked;

    if (!captchaChecked) {
        alert("Please confirm that you are human.");
        return;
    }

     Form.submit();
   
}

function ClearForm() {
    var Form = document.querySelector("form[name='login-form']");
    Form.elements["username"].value = ""; // Clear username field
    Form.elements["password"].value = ""; // Clear password field
    Form.elements["cbcaptcha"].checked = false; // Uncheck "I am human" checkbox
}
</script>

</body>
</html>
