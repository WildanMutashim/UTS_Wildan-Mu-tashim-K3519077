<?php    
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Game Matematika</title>
</head>
<body>
            <center>
			<h1>GAME MATH</h1>
            <p>Belajar Matematika Lebih Menyenangkan <i class="fa fa-smile"></i>
            </center>
        </header>
    <form>
        <br>
        <center>
            <label><h5>Hallo <?php echo $_SESSION["name"];?>, Sayang jawaban Anda salah… tetap semangat ya !!!</h5><label>
            <label><h5>Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?></i></h5><label>
            <button type="submit"><a href="soal.php">Soal berikutnya</a></button>
        </center>
    </form>
</body>
</html>