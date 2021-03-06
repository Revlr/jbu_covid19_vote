<!DOCTYPE html> 
<html lang="en"> <!-- <html lang="en" style="height: 100%"> --> 
<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<title>부트스트랩 차트그리기</title> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- 차트 링크 --> 
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> 

</head> 
<body> 
	<style type="text/css">
		body{
			background-color: #F2E0C4;
		}
		.container{
			background-color: white;
			margin-top: 50px;
			border-radius: 10px 10px 0px 0px;
		}
	</style>
	<div class="container"> 
		<canvas id="myChart"></canvas> 
	</div> <!-- 부트스트랩 --> 
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!-- 차트 --> 
	<?php
	$conn = mysqli_connect('localhost', '----id------', '------pw------','------db_name------');
	if(!$conn){
		echo "no";
	}
	$sql = "SELECT * FROM vote where answer like \"five\"";
	$res = mysqli_query($conn, $sql);
	$five = mysqli_num_rows($res);

	$sql = "SELECT * FROM vote where answer like \"six\"";
	$res = mysqli_query($conn, $sql);
	$six = mysqli_num_rows($res);

	$sql = "SELECT * FROM vote where answer like\"all\"";
	$res = mysqli_query($conn, $sql);
	$all = mysqli_num_rows($res);

	echo "
	<script>  
		var ctx = document.getElementById('myChart');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['5월 중', '6월 중', '1학기 사강 대체'],
				datasets: [{
					data: [". $five .", ". $six .", ". $all ."],
					backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
					borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
					borderWidth: 1
				}]
			},
			options: {
				legend: {
					display: false
				},
				title: {
					display: true,
					text: '중부대학교 COVID-19로 인한 1학기 오프라인 수업 일정 설문조사'
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>";
	?> 
</body> 
</html>
