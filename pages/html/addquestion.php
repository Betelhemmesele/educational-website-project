<?php 
session_start();
include "query.php";


if ($_SERVER["REQUEST_METHOD"]== "POST")

{
    $question=$_POST["question"];
    $userid=(int)$_SESSION["userid"];
    $conn->query("insert into question(question,vote,userid) values('$question',0,'$userid')");
    header("Location: question.php"); 
}
?>