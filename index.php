<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/vecteezy_gold-star-png-shotting-gold-star-png-transparent-gold_21665011_504.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pisces.</title>
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <form method="post" action="includes/login.inc.php" id="login" class="input-group">
                <input type="text" class="input-field" name="uid" placeholder="name"
                required>
                
                <input type="password" class="input-field" name="pwd" placeholder="Enter Password"
                required>
                <input type="checkbox" class="checkbox"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>

            <!---register--->

            <form method="post" action="includes/signup.inc.php" id="Register" class="input-group">
                <input type="text" class="input-field" name="name" placeholder="name"
                required>
                <input type="text" class="input-field" name="uid" placeholder="username"
                required>
                <input type="email" class="input-field" name="email" placeholder="Email ID"
                required>
                <input type="password" class="input-field" name="pwd" placeholder="Enter Password"
                required>
                <input type="password" class="input-field" name="pwdrepeat" placeholder="repeat Password"
                required>
                <input type="checkbox" class="checkbox"><span>I agree to Terms & Conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
        <?php
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
            } 
            else if($_GET["error"] == "invaliduid") {
                echo "<p>Choose a valid username!</p>";
            } 
            else if($_GET["error"] == "invalidemail") {
                echo "<p>Choose a valid email address</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords do not match!</p>";
            }
            else if($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            }
            else if($_GET["error"] == "usernametaken") {
                echo "<p>Username already exists!</p>";
            }
            else if($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
    }
}
        ?>
        
    </div>

    <script>
        var x = document.getElementById("login");
        var Y = document.getElementById("Register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            Y.style.left = "50px";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "50px";
            Y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>