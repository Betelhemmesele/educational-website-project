<?php 
session_start();
$_SESSION["current_page"]=basename($_SERVER['SCRIPT_NAME']);
if ( !isset($_SESSION["loggedin"]) )
{
    header("Location: login_signup.php"); 
    exit();
}
else if ($_SESSION["loggedin"]!="true")
{
    header("Location: login_signup.php"); 
    exit();
}
?>

<html >

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>


    <link rel="icon" type="image/png" href="../../assets/images/contact.jpeg" />





    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">

</head>

<body>
   <?php
   include "header2.php";
   
   ?>
    <div class="resize content" style="margin-top:10vh;">


        <div class="container-contact ">
            <div class="wrap-contact ">
                <form class="contact-form " onsubmit="return validate()">
                    <span class="contactForm-title">
					Send Us A Message
				</span>

                    <label class="label-input2" for="first-name">Tell us your name *</label>
                    <div class="wrap-input ">
                        <input id="first-name" class="input2" type="text" name="first-name" placeholder="First name" required>
                        <span class="focus-input2"></span>
                    </div>
                    <div class="wrap-input  ">
                        <input class="input2" type="text" name="last-name" placeholder="Last name" required>
                        <span class="focus-input2"></span>
                    </div>

                    <label class="label-input2" for="email">Enter your email *</label>

                    <div class="wrap-input ">
                        <input id="email" class="input2" type="email" name="email" placeholder="Eg. example@email.com" required>
                        <span class="focus-input2"></span>
                        <div id="email-error" class="error">
                            <p> ! invalid email</p>
                        </div>

                    </div>

                    <label class="label-input2" for="phone">Enter phone number</label>
                    <div class="wrap-input">
                        <input id="phone" class="input2" type="text" name="phone" placeholder="Eg. +251 9 12 000000" minlength="4" maxlength="13">
                        <span class="focus-input2"></span>
                        <div id="phone-error" class="error">
                            <p> ! invalid phone number</p>
                        </div>
                    </div>

                    <label class="label-input2" for="message">Message *</label>
                    <div class="wrap-input ">
                        <textarea id="message" class="input2" name="message" placeholder="Write us a message" required></textarea>
                        <span class="focus-input2"></span>
                    </div>

                    <div class="container-contact-form-btn">
                        <button class="contact-form-btn" type="submit">
						Send Message
					</button>
                    </div>
                </form>

                <div class="contact-side " style="background-image: url('../../assets/images/bg5.jpg');">



                    <div class=" size2">
                        <span class="txt1 p-b-20">
							Address
						</span>

                        <span class="txt2">
							Addisababa AAstu.
						</span>

                    </div>



                    <div class=" size2">
                        <span class="txt">
							Lets Talk
						</span>

                        <span class="txt3">
						+251 9 83198886
						</span>
                    </div>


                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">

                        </div>

                        <div class=" size2">
                            <span class="txt1 ">
							General Support
						</span>

                            <span class="txt3">
							avail@gmail.com
						</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer" class="resize">
        <div id="footer" class="resize">
            <div style=" flex-direction: row;" class="resize">

                <div style="flex-direction: column; ">
                    About
                    <p style="font-family: rosmantica; font-size: small;">
                        Avail is a web system made by students in AASTU to help solve problems faced in colledge studies.</p>

                </div>
                <div>
                    catagories
                    <ul style="list-style: none;">
                        <li>
                            <a href="">
                                Books
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Avail ask me
                            </a>

                        </li>
                    </ul>
                </div>
                <div style="align-items: center">
                    Quick links
                    <ul style="list-style: none;">
                        <li>

                            <a href="">Back to top</a>
                        </li>
                        <li>
                            <a href=""> profile</a>
                        </li>
                        <li>
                            <a href="">contact us</a>

                        </li>
                        <li>
                            <a href="">   Sign out</a>

                        </li>
                    </ul>
                </div>
            </div>
            <div style="flex-direction: row;" class="resize">
                <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color: rgb(129, 126, 121); padding-top: 1.2%;margin-right: 25%;">
                    Copyright © 2022 All Rights Reserved by Avail inc.
                </p>
                <a href="" style="margin: .5%;"><img class="foot-ico" src="../../assets/images/facebook.png" alt=""></a>
                <a href="" style="margin: .5%; "> <img class="foot-ico" src="../../assets/images/instagram.png" alt=""></a>
                <a href="" style="margin: .5%;"><img class="foot-ico" src="../../assets/images/linkedin.png" alt=""></a>
                <a href="" style="margin: .5%;"><img class="foot-ico" src="../../assets/images/telegram.png" alt=""></a>
            </div>

        </div>
    </footer>
    <script src="../js/general.js"></script>
    <script src="../js/contact.js"></script>
</body>

</html>