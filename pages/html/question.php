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




<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/question.css">


</head>

<body>
<?php  
   include "header2.php";

   include "query.php";
?>

    <div id="full-container" class="">
       




        <div class="content-wrap">
            <div class="resize content flex-box ">

                <div class="sized" id="new-question-wrap">
                    <div class="new-question ">
                        <p style="font-size: 1.2em; font-family: aquire;">
                            Add a new question
                        </p>
                        <ul>
                            <li>
                              
                                make your question descriptive and precise
                            </li>
                            <li>
                                vulgar language is forbidden
                            </li>
                            <li>
                                good luck finding help
                            </li>

                        </ul>
                    </div>
                    <div id="question-wrap">
                    <form action="addquestion.php"  method="POST">
                        <textarea id="question" name="question" placeholder="your new question goes here"></textarea>
                        <button id="add-btn" type="submit" > <img src="../../assets/images/add.png" alt=""></button>
                    </form>
                    </div>
                </div>
                <div class=" card" id="trending">
                    <h1>
                        trending questions
                    </h1>
                    <a onclick="openPop()">
                        <div class="a-question medium-card card">
                            <b> by someone
                            </b>

                            <p class="card"> what is the fastest car
                            </p>
                            <i>
                            2 comments sofar
                        </i>

                            <div class="comments">
                            </div>
                        </div>
                    </a>
                    <a>
                        <div class="a-question medium-card card">
                            <b> by someone
                            </b>

                            <p class="card"> how to build a java program on vs code
                            </p>
                            <i>
                            2 comments sofar
                        </i>

                            <div class="comments">
                            </div>
                        </div>
                    </a>
                    <a>
                        <div class="a-question medium-card card">
                            <b> by someone
                            </b>

                            <p class="card"> what are the -moz and-o tags in css
                            </p>
                            <i>
                            2 comments sofar
                        </i>

                            <div class="comments">
                            </div>
                        </div>
                    </a>



                </div>

            </div>
            <div class="card full-card " id="old-questions">
                <?php
                $questions;
                $result=$conn->query("select * from question");
                while ($question=$result->fetch_assoc())
                {
                    $questions= ' <a onclick="openPop('.$question["id"].')">
                    <div class="a-question medium-card card">
                        <b> by '.($conn->query('select username from user where id ="'.$question["userid"].'"')->fetch_assoc()["username"]).'
                        </b>

                        <p class="card"> '.$question["question"].'
                        </p>
                        <i>
                        '.($conn->query('select * from comment where questionid="'.$question["id"].'"')->num_rows).' comments sofar
                    </i>
                    
                <b style="margin:5%;margin-right:0;">Votes:'.$question["vote"].'</b>
                    </div>
                </a>'.$questions;
                }
                echo $questions;

                ?>
                
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

    </div>
    <div id="pop" class="medium-card card sized">
        <a onclick="closePop()">X</a>
            <div id="pop-card">
        <div id="pop-question">

            <div class="a-question small-card card">
                <b> by someone
                    </b>

                <p class="card"> what is the fastest car
                </p>
                <i>
                    2 comments sofar
                </i>

                <div class="comments">
                </div>
            </div>

        </div>
        <div class="card" id="comments">
            <div class="a-comment medium-card card">
                <b> by someone
                    </b>

                <p class="card"> from what i know i thin k its the bugati cherion
                </p>




            </div>
            <div class="a-comment medium-card card">
                <b> by someone
                    </b>

                <p class="card"> its the Devel Sixteen 347mph (or 550+kph) you can find the top 10 list here https://luxe.digital/lifestyle/cars/fastest-cars/
                </p>




            </div>
            <div class="a-comment medium-card card">
                <b> by someone
                    </b>

                <p class="card"> having the top speed doesnt always mean top performance the best all rounder is the Bugatti Chiron Super Sport 300+
                </p>




            </div>
        </div>
           
        <div class="flex-box" id="comment-box">
            <textarea placeholder="your comment goes here" maxlength="100" id ="new comment"></textarea>
            <button id="commentadded">Comment</button>
        </div>
        </div>
    </div><script src="../js/jquery-3.6.0.min.js"> </script>
    <script src="../js/question.js"></script>
</body>

</html>