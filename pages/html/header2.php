<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/question.css">


</head>
<body>
<header>


<nav id="nav" class="fixed-header">
    <div class="site-title visible-title" id="navdiv" style="font-family: aquire;">avail</div>
    <button id="menuIcon" style="background: transparent;border-style: none;"> <img src="../../assets/images/list.ico" alt="" ></button>
    <ul id="navButtons">
        <li><a href="../html/index.php">Home</a></li>

        <li><a href="../html/question.php">Q & A</a></li>
        <li><a href="../html/contact.php">Contact</a></li>
        <li><a href="../html/books&video.php">Books and videos</a></li>
        <li  >
        <img  src="../../assets/images/account.png" style="padding-top: 2vh;padding:0; align-self:center; float:right;"id="profile">
        </li>
        
    
        <li style="margin-bottom:1%;" ><span class="search-box" id="search-box">
        <form id="search_form">                   
            <button    type ="button" class="btn-search" id="btn-search"><img src="../../assets/images/search.png" style=" width:2vw;height: 4vh;" alt=""></button>
               <button   type ="submit" class="btn-search2" id="btn-search2"><img src="../../assets/images/search.png" style=" width:2vw;height: 4vh;" alt=""></button>
               <input type="text" class="input-search" id="input-search" name="search_box" placeholder="Type to Search...">
           </form>
          
           </span</li>


        <ul>




</nav>
</header>
<div class="search-return" id="search-return">
    
</div>
<div id="profiletab">
<?php
    if($_SESSION["loggedin"]=="true")
    {
       
echo "<i>".$_SESSION["username"]."<i></br>";
    }
    ?>
    <a href="logout.php" > logout</a>
</div>
<script src="../js/jquery-3.6.0.min.js"> </script>