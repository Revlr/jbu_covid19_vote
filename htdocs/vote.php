<!DOCTYPE html>
<html lang="ko" class="m2">
<head>
	<title>COVID-19로 인한 1학기 운영 설문</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		body{
			background-color: #F2E0C4;
		}
		.topline{
			width: 760px;
			background-color: #8F7A3D;
			height: 10px;
			margin-left: -30px;
			border-radius: 10px 10px 0px 0px;
		}
		.top{
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		.box{
			background-color: white;
			width: 760px;
			left: 50%;
			right: 50%;
			margin-left: 50px;
			margin-right: 50px;
			margin-top: 15px;
			padding: 30px;
			border-radius: 10px;
			display: flex;
			flex-direction: column;
		}
		.btn {
			background-color: #8F7A3D;
			border-color: #8F7A3D;
			color: #FFF; 
		}
		.btn:hover,
		.btn:focus {
			border-color: #9B8543;
			background-color: #9B8543;
			color: #FFF;
		}
		.btn:active,
		.btn:visited,
		.btn:active:focus,
		.btn:active:hover {
			border-color: #AA9149;
			background-color: #AA9149;
			color: #FFF;
		}

	</style>
	<script type="text/javascript">
		function oneCheckbox(a){
			var obj = document.getElementsByName("semester");
			for(var i=0; i<obj.length; i++){
				if(obj[i] != a){
					obj[i].checked = false;
				}
			}
		}
	</script>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['id'])) {
			
	?>
	<div class="top">
		<form action="votecheck.php" method="get">
			<div class="box" style="padding-top: 0">
				<div class="topline"><br></div>
				<h2>
					COVID-19로 인한 1학기 오프라인 수업 일정 설문조사
				</h2>
				<br>
				12일 대학가에 따르면 온라인 강의를 1학기 전체로 연장한 학교들의 경우 학생들의 요청을 반영한 경우가 많았습니다. 서울 주요 대학 중 1학기 전체 온라인 강의를 운영하는 학교는 서강대, 이화여대, 건국대, 숭실대 등입니다. 서울대, 성균관대, 경희대, 한국외대, 한양대 등은 코로나19가 진정될 때까지 무기한 연장을 택했습니다. 이 외에 고려대, 명지대는 5월 2일까지, 연세대는 5월 12일까지 온라인 강의를 연장하고 추이를 보며 추가 연장을 결정한다는 방침입니다. 이에 우리 학교도 학생이 움직여야 한다는 생각에 이렇게 설문조사를 진행합니다. SNS를 통해 많이 공유해주시고 적극 참여 부탁드립니다.
			</div>
			<div class="box">
				1학기 운영 (개강은 언제가 적절한가?)
				<br>
				<br>
				<label><input type="checkbox" name="semester" value="five" onclick="oneCheckbox(this)"> 5월 중</label>
				<br>
				<label><input type="checkbox" name="semester" value="six" onclick="oneCheckbox(this)"> 6월 중</label>
				<br>
				<label><input type="checkbox" name="semester" value="all" onclick="oneCheckbox(this)"> 1학기 전체 사이버강의 대체</label>
			</div><br>
			<button class="btn" type="submit" style="margin-left: 50px">제  출</button>
		</form>
	</div>
	<?php
		} else {
			echo "<script>alert('로그인이 필요합니다.');window.location.replace('index.php');</script>\n";
		}
	?>
</body>
</html>
