<?php

$comments=["comment1","comment2","comment3"];
if(isset($_POST['comment'])){
    array_push($comments,$_POST['comment']);
}
foreach($comments as $comment)
{
    echo $comment."<br>";
}

?>
