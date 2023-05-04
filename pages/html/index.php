<?php 


session_start();
if (!(isset($_SESSION["loggedin"])))
{

 $_SESSION["loggedin"]="false";
}
$_SESSION["current_page"]=basename($_SERVER['SCRIPT_NAME']);




    



?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/index.css">

</head>

<body>



   <?php
   
   
   if( $_SESSION["loggedin"]=="true")
   {
    include "header2.php";

  
}
 else
   {
    include "headerhome.php";
   }
   ?>


    <div class="content-wrap">
        <div class="resize content ">
            <div class="flex-box sized resize">
                <div class="card medium-card sized " id="welcome">
                    <b>Welcome to Avail </b>


                    <p> A clever man said Knowledge is power. Information is liberating. Education is the premise of progress, in every society, in every family.</p>
                    <p>And we want to help you sit amongst the clever.</p>
                </div>
                <div class="flex-box sized" id="whats-new">

                    <h1>Whats new </h1>
                    <div class="card flex-box inner-card">
                        <img src="../../assets/images/celebration.png">
                        <p style="font-size: 2em;">
                            congrats! Avail has been launched and its now ready for you to test
                        </p>
                    </div>

                    <div class="card flex-box inner-card">
                        <img src="../../assets/images/world.jpg">
                        <p style="font-size: 2em;">
                            Another good news! the world is connected more than ever you
                        </p>
                    </div>
                </div>
            </div>
            <div class="card   full-card " style="margin: top 10%;">
                <P style="font-size: 2em;">what will you find here ?</P>
                <div class="flex-box">
                    <p style="color: rgb(73, 165, 165); font-size: 2em;">Books and other resources to your liking </p>

                    <img src="../../assets/images/resources.jpg" alt=" resources" style="width: 50%;">
                </div>
                <div class="flex-box">
                    <img src="../../assets/images/q&a.jpeg" alt="question and answer" style="width: 60%;">
                    <p style=" color: rgb(73, 165, 165); font-size: 2em; ">Try our question and answer platform ,surely you will find it helpful </p>
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
                <div style="display: flex;flex-direction: row;">
                    <a href="" style="margin: .5%;"><img class="foot-ico" src="../../assets/images/facebook.png" alt=""></a>
                    <a href="" style="margin: .5%; "> <img class="foot-ico" src="../../assets/images/instagram.png" alt=""></a>
                    <a href="" style="margin: .5%;"><img class="foot-ico" src="../../assets/images/linkedin.png" alt=""></a>
                    <a href="" style="margin: .5%;"><img class="foot-ico" src="../../assets/images/telegram.png" alt=""></a>
                </div>
            </div>

        </div>
    </footer>
    <script src="../js/general.js"></script>
    <script src="../js/index.js"></script>


</body>

</html>