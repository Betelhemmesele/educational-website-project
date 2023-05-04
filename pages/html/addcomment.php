<?php 
session_start();
include "query.php";
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
    $comment=$_POST["comment"];

    $questionid=$_POST["questionid"];
    $userid=$_SESSION["userid"];
    $conn->query("insert into comment(comment,questionid,userid) values('$comment','$questionid','$userid')");
    echo json_encode(["username"=>$_SESSION["username"]]);
}
?>