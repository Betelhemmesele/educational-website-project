<header>
<script>
    function searchReturnLocation(){
    const element = document.getElementById("nav");
    const rect = element.getBoundingClientRect();
     console.log( rect.height.toFixed() );
     id("search-return").style.top ="4";
  

};

</script>
<nav id="nav" class="fixed-header">
    <div class="site-title visible-title" id="navdiv" style="font-family: aquire;">avail</div>
    <button id="menuIcon" style="background: transparent;border-style: none;"> <img src="../../assets/images/list.ico" alt="" ></button>
    <ul id="navButtons">
        <li><a href="../html/index.php">Home</a></li>

       
        <li><a href="../html/login_signup.php">Sign-up/login</a></li>

    


       
        <li><span class="search-box" id="search-box">
        <form id="search_form">         
               <button    type ="button" class="btn-search" id="btn-search"><img src="../../assets/images/search.png" style=" width: 80%;height: 65%;" alt=""></button>
               <button   type ="submit" class="btn-search2" id="btn-search2"><img src="../../assets/images/search.png" style=" width: 80%;height: 65%;" alt=""></button>
               <input type="text" class="input-search" id="input-search" name="search_box" placeholder="Type to Search...">
           </form>
          
           </span></li>


        <ul>



        <div class="search-return" id="search-return">

</div>
</nav>
</header>

<script src="..\js\jquery-3.6.0.min.js"> </script>