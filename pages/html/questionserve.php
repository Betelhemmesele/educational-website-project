<?php 
session_start();
include "query.php";


if ($_SERVER["REQUEST_METHOD"]== "POST")

{
 
  $question=$conn->query('Select * from question where id="'.$_POST["x"].'"')->fetch_assoc();
  $comments=$conn->query('Select * from comment where questionid="'.$question["id"].'"');
 $commentsarray=array();
 while($comment=$comments->fetch_assoc())
 {
array_push($commentsarray,["comment"=> $comment["comment"],"username"=>$conn->query('Select * from user where id="'. $comment["userid"].'"')->fetch_assoc()["username"]]);
 }
  echo json_encode(["question" => $question["question"],"username" => $conn->query('Select * from user where id="'. $question["userid"].'"')->fetch_assoc()["username"],"comments"=>$commentsarray]);
}

?>