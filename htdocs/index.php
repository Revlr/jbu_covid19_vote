<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>중부대학교 코로나 투표</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body{
			background-image: url("https://sso.joongbu.ac.kr/resources/js/webcrypto/ui_template/image/sso/bg3.jpg");
		}
	</style>
</head>
<body>
	<?php session_start(); ?>
	<style>
		.btn-primary {
			background-color: #A52A2A;
			border-color: #A52A2A;
			color: #FFF; 
		}
		.btn-primary:hover,
		.btn-primary:focus {
			border-color: #A52A2A;
			background-color: #A52A2A;
			color: #FFF;
		}
		.btn-primary:active,
		.btn-primary:visited,
		.btn-primary:active:focus,
		.btn-primary:active:hover {
			border-color: #A52A2A;
			background-color: #A52A2A;
			color: #FFF;
		}
		.box {
			background-color: white;
			margin-right: 40px;
			margin-left: 40px;
			padding: 40px;
			text-align: center;
			text-decoration: none;
		}
		.logo{
			padding: 10px;
			display: block;
			margin: 0px auto;
			margin-top: 40px;
		}
		.logo img{
			max-width: 90%;
		}
		div{
			text-align: center;
		}
	</style>
	<div class="container">

		<form class="form-signin" action="login.php" method="post">
			<div class="logo">
			<img src="img/logo2.png">
			</div>
			<br><br>
			<div class="box">
				<h4 class="form-signin-heading">COVID-19로 인한 1학기 오프라인 수업 일정 설문조사</h4><br>

				<label for="inputEmail" class="sr-only">학번</label>
				<input type="text" name="id" class="form-control" placeholder="학번을 입력하세요" required autofocus>
				<p><p>
				<label for="inputPassword" class="sr-only">비밀번호</label>
				<input type="password" name="pw" class="form-control"placeholder="비밀번호를 입력하세요" required><br><br>
				<button class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>
				<br>
				<a href="https://sso.joongbu.ac.kr/userInfoInput.jsp" style="color:gray">비밀번호 찾기 ></a>
				<br>
				<a href="statistics.php" style="color:gray">통계 페이지 ></a>
				<br>
			</div>
		</form>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
