<?php
include_once 'dbConnection.php';
session_start();

//$email=$_SESSION['email'];

//delete user
//if(isset($_SESSION['key'])){
//if(@$_GET['demail'] && $_SESSION['key']=='sunny7785068889') {
$deltask=@$_GET['deltask'];
$r1 = mysqli_query($con,"DELETE FROM tasks WHERE Task_ID='$deltask' ") or die('Error');
header("location:TasksList.php");
//}
//}
//remove quiz
if(isset($_SESSION['key'])){
if(@$_GET['q']== 'rmquiz' && $_SESSION['key']=='sunny7785068889') {
$eid=@$_GET['eid'];
$result = mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$qid = $row['qid'];
$r1 = mysqli_query($con,"DELETE FROM options WHERE qid='$qid'") or die('Error');
$r2 = mysqli_query($con,"DELETE FROM answer WHERE qid='$qid' ") or die('Error');
}
$r3 = mysqli_query($con,"DELETE FROM questions WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($con,"DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($con,"DELETE FROM history WHERE eid='$eid' ") or die('Error');

header("location:dash.php?q=5");
}
}