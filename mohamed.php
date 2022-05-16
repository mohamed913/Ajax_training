<?php

if(isset($_GET['name'])||isset($_GET['age']))
{
    echo $_GET['name'].' '.$_GET['age'];

}else
{
    echo"noo";
}

if(isset($_POST['name'])||isset($_POST['age']))
{
    echo $_POST['name'].' '.$_POST['age'];

}else
{
    echo"noo";
}


?>