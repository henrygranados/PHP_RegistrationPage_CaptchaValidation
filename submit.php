<?php
function msg($status,$txt)
{
    return '{"status":'.$status.',"txt":"'.$txt.'"}';
}
// we check if everything is filled in and perform checks
//check if fname is empty
if(!$_POST['fname'])
{
    die(msg(0,"<p>Please enter your first name.</p>"));
    $nameErr = "Name is required";
}
//check if lname is empty
if(!$_POST['lname'])
{
    die(msg(0,"<p>Please enter your lastname</p>"));
}

//Check if gender is checked
if(!isset($_POST['radio']))
{
 die(msg(0,"<p>Please choose a gender</p>"));
}


header('Location:download.php?fname='.$_POST['fname']."&lname=".$_POST['lname']."&radio=".$_POST['radio']);
?>