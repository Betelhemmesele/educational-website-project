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
<!DOCTYPE html>


<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/books&video.css">


</head>

<body>
   <?php  
   include "header2.php";
   ?>












    <div id="container">

        <header class="header">
            <h1>Avail video archive</h1>
        </header>

        <article>
            <p>Avail provides you with many videos located on our servers and many orther from public video sharing sites like you tube .but dont worry we will do every thing we can to filter out malicious and inappropriate content,</p>
        </article>
        <section class="videos">
            <div class="video-grid front-page">
                <ul class="video-list ">
                    <li class="video ">
                        <a href="https://www.youtube.com/embed/Zq6Crtglztk?autoplay=1&controls=0&showinfo=0&color=white&rel=0">
                            <figure style="background-image: url(https://i.ytimg.com/an_webp/bor0qLifjz4/mqdefault_6s.webp?du=3000&sqp=CMaS0pAG&rs=AOn4CLAtzJeiyoLaEn4cN-tPtgwaDAd17w);">
                                <img src="../../assets/images/video-thumb-placeholder-16-9.png" />
                                <figcaption>how a cpu is made </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="video ">
                        <a href="https://www.youtube.com/watch?v=JMUxmLyrhSk">
                            <figure style="background-image: url(https://i.ytimg.com/an_webp/JMUxmLyrhSk/mqdefault_6s.webp?du=3000&sqp=CN310ZAG&rs=AOn4CLCPLoOZZzaH_ft8SA2rVeZXh2kaEQ);">
                                <img src="../../assets/images/video-thumb-placeholder-16-9.png" />
                                <figcaption>AI full course</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="video ">
                        <a href="https://www.youtube.com/watch?v=L1ung0wil9Y">
                            <figure style="background-image: url(https://i.ytimg.com/an_webp/L1ung0wil9Y/mqdefault_6s.webp?du=3000&sqp=CNz_0ZAG&rs=AOn4CLCYbjrY3XYNjDbZ2a_1af4O16C-ew);">
                                <img src="../../assets/images/video-thumb-placeholder-16-9.png" />
                                <figcaption>Assembly language and computer architecture</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="video ">
                        <a href="https://www.youtube.com/watch?v=-qfEOE4vtxE">
                            <figure style="background-image: url(https://i.ytimg.com/an_webp/-qfEOE4vtxE/mqdefault_6s.webp?du=3000&sqp=CJLu0ZAG&rs=AOn4CLBQoKmhn2-x2yX0IUclyGbP0E_L0Q);">
                                <img src="../../assets/images/video-thumb-placeholder-16-9.png" />
                                <figcaption>Bootstrap for beginners</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="video ">
                        <a href="https://www.youtube.com/watch?v=ZaXm6wau-jc">
                            <figure style="background-image: url(https://i.ytimg.com/an_webp/ZaXm6wau-jc/mqdefault_6s.webp?du=3000&sqp=COvr0ZAG&rs=AOn4CLC2GuKpuuRKgoxLypfoJ8IBRAvOpA);">
                                <img src="../../assets/images/video-thumb-placeholder-16-9.png" />
                                <figcaption>How does an antenna work</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="video ">
                        <a href="https://www.youtube.com/watch?v=G8BwBJqHSyU">
                            <figure style="background-image: url(https://i.ytimg.com/an_webp/G8BwBJqHSyU/mqdefault_6s.webp?du=3000&sqp=CPj50ZAG&rs=AOn4CLDvfnQo2ilhQ5qeb_pGcFHxMoAXDQ);">
                                <img src="../../assets/images/video-thumb-placeholder-16-9.png" />
                                <figcaption>Diesel engines</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
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


</body>

</html>