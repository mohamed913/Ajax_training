<?php
/*
 * afunction that connect to the database
 */
function connectdb($dbname)
{
    global  $con;
    $dsn="mysql:host=localhost;dbname=$dbname";
        $user="root";
        $pass="";
        $option=array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        try
        {
            $con=new PDO($dsn,$user,$pass,$option);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            
            echo 'CANNT CONNECT TO DATABASE'.$e->getMessage();

        }
}






$comments=[];
connectdb('ajax');
$stmt=$con->prepare("SELECT * FROM comments ");
$stmt->execute(array());
//$rrr=$stmt->rowCount();
$rows=$stmt->fetchAll();



global $row;

foreach ($rows as  $row1)
{
    array_push($comments,$row1['comment']);
  
}


if(isset($_POST['comment'])){
    if($_POST['comment']==""){

    }else{
        $stmt=$con->prepare("INSERT INTO comments(comment)VALUES(?)");
        $stmt->execute(array($_POST['comment']));
       // if($stmt){   $message="inserted successfully";redirection1($message, 2);}
    
       // array_push($comments,$_POST['comment']);
    }
  
}
foreach($comments as $comment)
{
    echo $comment."<br>";
}

?>
