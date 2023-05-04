<?php 
session_start();
?>
<?php
header('Content-type: application/json; charset=utf-8');
include "query.php";
?>

<?php
if ($_SERVER["REQUEST_METHOD"]="POST")
{
    $found=null;
    $pages =array(" home "=> "home"," question "=> "question"," q&a "=> "question"," question and answer "=> "question"," contact us "=> "support"," support "=> "support"," books "=> "books"," video "=> "books"," booksandvideo "=> "books");
    if ($_SESSION["current_page"]=="question.php")
    {
 

 $result = $conn->query("select * from question");
 $questionsfound=array();
 while ($question=$result->fetch_assoc())
 {
   $username= $conn->query('select * from user where id='.$question["userid"])->fetch_assoc()["username"];
    if ((str_contains(strtolower($username),strtolower($_POST['search_box'])) or str_contains(strtolower($question["question"]),strtolower($_POST['search_box'])))and $_POST['search_box']!="" )
    {
array_push($questionsfound,["question"=>$question["question"],"questionid"=>$question["id"],"username"=>$username,"vote"=>$question["vote"],"comments"=>$conn->query('select * from comment where questionid="'.$question["id"].'"')->num_rows]);
$found=1;    
}
}
 echo json_encode(["for" => "qa","data"=> $questionsfound,"ff"=>count($questionsfound)]);
    }
    
    else{
        $found=null;
        foreach($pages as $page => $acr)
        {

if ((stripos($_POST['search_box'] , $page) !="false" and stripos($_POST['search_box'] , $page) !=0) or (stripos($page,$_POST['search_box']) !="false" and stripos($page,$_POST['search_box']) !=0))
      {
       $found=$pages[$page];
       break;
      } 
    }


    echo json_encode(["for" => "nonqa","data"=> $found ]);

   
}
}
?>
