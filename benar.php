<?php    
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Game Matematika</title>
</head>
<body>
		<header>
            <center>
			<h1>GAME MATH</h1>
            <p>Belajar Matematika Lebih Menyenangkan <i class="fa fa-smile"></i>
            </center>
        </header>
        <br>
        <center>
            <label><h4>Hallo <?php echo $_SESSION["name"];?>, Selamat jawaban anda benar!!!</h4><label>
            <label><h4>Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?></i></h4><label>
            <button type="submit" class="btn btn-primary"><a href="soal.php">Soal berikutnya</a></button>
        </center>
</body>
</html>