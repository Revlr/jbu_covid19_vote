<?php
	session_start();
	$conn = mysqli_connect('localhost', '----id------', '------pw------','------db_name------');
	if(!$conn){
		echo "no";
	}
	$sql = "SELECT student_id FROM vote where student_id like ".$_SESSION['id'];
	$res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($res);
	if ($row['student_id'] == $_SESSION['id']) {
		echo "<script>alert('이미 투표 하셨습니다.');window.location.replace('statistics.php');</script>";
	} else {
		$sql = "INSERT INTO vote (student_id, answer, wdate) VALUE ('".$_SESSION['id']."', '".$_GET["semester"]."', now());";
		mysqli_query($conn, $sql);
		echo "<script>alert('투표 완료되었습니다.');window.location.replace('statistics.php');</script>";
	}
?>
