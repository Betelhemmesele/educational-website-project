<?php 
session_start();
include "query.php";
$_SESSION["loggedin"]="false";

if ($_SERVER["REQUEST_METHOD"]== "POST")
{
$query="select * from user";

$result=$conn->query($query);
$email= $_POST["email"];
$password= $_POST["password"];
if ($result->num_rows > 0) {
while ($user =$result->fetch_assoc())
{
   
    if($email==$user["email"] and $password==$user["password"])
    {
        $_SESSION["loggedin"]="true";
        $_SESSION["username"]=$user["username"];
        $_SESSION["userid"]=$user["id"];
        break;
    }
    else
    {
        $_SESSION["loggedin"]="failed";
    }


}
}
else{
    $_SESSION["loggedin"]="failed"; 
}

if ($_SESSION["loggedin"]=="true")
{
    header("Location: index.php"); 
}
else
{
    header("Location: login_signup.php");  
    
}

}




?>