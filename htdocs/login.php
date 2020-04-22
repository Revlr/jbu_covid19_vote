<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    $id = $_POST["id"];
    $pw = $_POST["pw"];

    $command = "-------------private----------------";
    $output = -----------this function has vulnerability---------------;
    echo $output;
    if ($output == "-------block------") {
      session_start();
      $_SESSION['id'] = $id;
      echo "<script>document.location.href='vote.php';</script>";
    }
    else{
      echo "<script>alert('아이디 또는 비밀번호가 틀렸습니다.');history.back();</script>";
    }
   ?>
</body>
</html>
