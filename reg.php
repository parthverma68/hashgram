<?php
session_start();
?>
<?php

$_SESSION["fn"]=$_POST['fn'];
$_SESSION["ln"]=$_POST['ln'];

$_SESSION["age"]=$_POST['age'];

$_SESSION["dob"]=$_POST['dob'];

$_SESSION["cn"]=$_POST['cn'];

$_SESSION["pc"]=$_POST['pc'];

$_SESSION["ui"]=$_POST['ui'];

$_SESSION["add"]=$_POST['add'];

$_SESSION["pass1"]=$_POST['pass1'];

$_SESSION["pass2"]=$_POST['pass2'];
echo "{$_SESSION['fn']}"

?>

