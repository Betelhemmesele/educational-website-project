<?php 
session_start();
$_SESSION["current_page"]=basename($_SERVER['SCRIPT_NAME']);

if ($_SESSION["loggedin"]=="true")
{
    header("Location: index.php"); 
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,height=device-height initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/login_Signup.css">



</head>

<body>
<?php
   include "header1.php";
   ?>
<div class="password_recovery_page">

<input placeholder="enter the email associated with your account">
<button>send password recovery email</button>
<button>backtologin</button>
</div>
<div class="big" id="big">
        <div class="container">
            <!-- Sign Up -->
            <div class="container__form signup">
                <form action="signup.php" method="POST" class="form" id="form2" >
                    <h2 class="form__title">Sign Up</h2>
                    <input type="text" placeholder="User name" class="input"  name ="username" required />

                    <input id="email" type="email" placeholder="Email" name ="email" class="input" required />
                    <div id="email-error" class="error" >
                        <p> ! invalid email </p>
                    </div>
                    <input id="password" type="password" placeholder="Password" name="password"  class="input" required minlength="8" maxlength="32" />
                    <input id="Passwordrepeat" type="password" placeholder="Repeat password" name="passwordrepeat" class="input" required minlength="8" maxlength="32" />
                    <div id="password-error" class="error">
                        <p> ! passwords don't match </p>
                    </div>
                    <button class="btn" type="submit">Sign Up</button>
                </form>
            </div>

            <!-- Sign In -->
            <div class="container__form signin">
                <form action="signin.php" method="POST" class="form" id="form1">
                    <h2 class="form__title">Sign In</h2>
                    <input type="email" placeholder="Email" name="email" class="input" id="emaillsignin" required />
                    <div id="email-error" class="error" >
                        <p> ! invalid email </p>
                    </div>

                    <input type="password" placeholder="Password" name="password" id="passwordsignin" class="input" required minlength="8" maxlength="32" />
                   <?php
                   if($_SESSION["loggedin"]=="failed")
                   {
                        $visible="unset";
                   }
                   else{
                    $visible="none";
                   }
                   echo (' <div id="login-error" class="error" style="display:'.$visible.';">
                   <p> ! invalid cridentials </p>
               </div>');
                   
                  
                   ?>
                   
                 
                    <a href="" id="forgot_pass1" class="link">Forgot your password?</a>
                    <button class="btn" type="submit">Sign In</button>
                </form>
            </div>

            <!-- Overlay -->
            <div class="container__overlay">
                <div class="overlay">
                    <div class="overlay__panel overlay--left">
                        <button class="btn" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay__panel overlay--right">
                        <button class="btn" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="small" id="small" >

        <div class="login-container">
            <div class="login-wrap">
                <input id="sign-in-tab" type="radio" name="tab" class="sign-in" checked><label for="sign-in-tab" class="tab">Sign In</label>
                <input id="sign-up-tab" type="radio" name="tab" class="sign-up"><label for="sign-up-tab" class="tab">Sign Up</label>
                <div class="login-form">
                  <form id="form1small" action="signin.php" method="post" >
                    <div class="sign-in-container">
                    <div class="box">
                            <label for="emailsigninsmall" class="label">Email</label>
                            <input id="emailsigninsmall" name="email" type="email" class="input" required>
                            <div id="email-errorsmall" class="error" >
                        <p> ! invalid email </p>
                    </div>
                        </div>
                        <div class="box">
                            <label for="passwordsigninsmall" class="label">Password</label>
                            <input  type="password"  name="password" id="passwordsigninsmall"class="input" data-type="password"  required minlength="8" maxlength="32">
                            <?php
                   if($_SESSION["loggedin"]=="failed")
                   {
                        $visible="unset";
                   }
                   else{
                    $visible="none";
                   }
                   echo (' <div id="login-error" class="error" style="display:'.$visible.';">
                   <p> ! invalid cridentials </p>
               </div>');
               $_SESSION["loggedin"]="false";
                   
                  
                   ?>
                   
                        </div>
                        
                        <div class="box">
                            <input type="submit" class="button" >
                        </div>
                        <div class="hr"></div>
                        <div class="bottom-link">
                            <a href="" id="forgot_pass2">Forgot Password?</a>
                        </div>
                    </div>
                    </form>
                    <form id="form2small" action="signup.php" method="post" >
                    <div class="sign-up-container">
                    <div class="box">
                            <label for="usernamesmall" class="label">User name</label>
                            <input id="usernamesmall" name="username" type="text" class="input" required>
                        </div>
                        <div class="box">
                            <label for="passwordsmall" class="label">Password</label>
                            <input id="passwordsmall" type="password" name="password" class="input" data-type="password"  required minlength="8" maxlength="32">
                        </div>
                        <div class="box">
                            <label for="passwordrepeatsmall" class="label">Repeat Password</label>
                            <input id="passwordrepeatsmall"  name="passwordrepeat" type="password" class="input" data-type="password"  required minlength="8" maxlength="32">
                            <div id="password-errorsmall" class="error">
                        <p> ! passwords don't match </p>
                    </div>
                        </div>
                        <div class="box">
                            <label for="emailsmall" class="label">Email Address</label>
                            <input id="emailsmall" name="email" type="email" class="input" required>
                            <div id="email-errorsmall" class="error" >
                        <p> ! invalid email </p>
                    </div>
                        </div>
                        <div class="box">
                            <input type="submit" class="button" >
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <div class="bottom-link ">
                                <label for="sign-in-tab">Already Member?</label>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        
        <script src="../js/general.js"></script>
        <script src="../js/login_signup.js"></script>
        <?php



?>
    </body>

</html>
