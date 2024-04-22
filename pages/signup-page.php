<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Karim Itani - Portfolio - Signup</title>
   
    <link rel="stylesheet" href="../css/Styling.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/Form.css">
    
</head>
<body>

<div class="title">
    <span>Sign-Up!</span>
</div>

<div class="login-container">
    <div class="login-title">Already have an account? Click here to LogIn!</div>
    <a href="../pages/login-page.php" class="login-button">Login</a>
</div>

<div class="paragraph" style="border:0;">
            <form action="../be/signup.php" method="POST" name="signup-form">
                <label for="fn">First Name</label>
                <br>
                <input type="text" name="firstname" class="txtfield">
                <br>
                <label for="ln">Last Name</label>
                <br>
                <input type="text" name="lastname" class="txtfield">
                <br>
                <label for="un">User Name</label>

                <br>
                <input type="text" name="username" class="txtfield">
                <br>
                <label for="email">Email</label>
                <br>
                <input type="text" name="email" class="txtfield">
                <br>
                <label for="dob">Date Of Birth</label>
                <br>
                <input type="text" name="dob" class="txtfield">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="password" class="txtfield">
                <br>
                <label for="pass">Confirm Password</label>
                <br>
                <input type="password" name="confirmPassword" class="txtfield">
                
               <label for="r-male">Male</label>
                <input type="radio" name="sex" checked id="r-male" value="m">
                                <label for="r-female">Female</label>

                <input type="radio" name="sex" id="r-female" value="f">
                
                <label for="sel-language">Language</label>
                <select name="language" id="sel-language" class="mSelect">
                    <option value="-1">--</option>
                    <option value="en">English</option>
                    <option value="ar">Arabic</option>
                </select>
                <br>
                <br>
                <label for="cbcaptcha">I am human</label>
                <input type="checkbox" name="cbcaptcha" id="cbcaptcha">
                <br>
                <br>
                <input type="button" value="Sign Up" class="button" onclick="SignUp()">
                <input type="button" value="Cancel" class="button" onclick="ClearForm()">
            
           
            </form>


             
            
        </div>


        <script>
    function SignUp() {
    var Form = document.querySelector("form[name='signup-form']");
    var pass = Form.elements["password"].value;
    var confPass = Form.elements["confirmPassword"].value;
    var captchaChecked = Form.elements["cbcaptcha"].checked;

    if (pass !== confPass) {
        alert("Passwords must match.");
        return;
    }

    if (!captchaChecked) {
        alert("Please confirm that you are human.");
        return;
    }
    

    Form.submit();
}


 function ClearForm() {
        var Form = document.querySelector("form[name='signup-form']");
        Form.elements["firstname"].value = "";
        Form.elements["lastname"].value = "";
                Form.elements["username"].value = "";

        Form.elements["email"].value = "";
        Form.elements["password"].value = "";
        Form.elements["confirmPassword"].value = "";
        Form.elements["sex"].value = "m"; // Set default radio button value
        Form.elements["dob"].value = ""; // Clear date of birth field
        Form.elements["language"].value = -1; // Set default language value
        Form.elements["cbcaptcha"].checked = false; // Uncheck "I am human" checkbox
    }
</script>



</body>
</html>
