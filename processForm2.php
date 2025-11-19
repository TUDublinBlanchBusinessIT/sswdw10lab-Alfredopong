<?php
session_start();

$_SESSION['subTenKG'] = $_POST['underTen'];
$_SESSION['overTenKG'] = $_POST['tenToTwenty'];

header("Location: finalStep.php");
exit();
?>
