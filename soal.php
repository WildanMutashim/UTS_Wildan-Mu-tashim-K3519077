<?php
	session_start();
	if (isset($_SESSION["email"])) {
	} else {
		$_SESSION["name"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}
	if ($_SESSION["lives"] == 0) {
		header('Location: selesai.php');
	}

	$a = rand(0,20);
	$b = rand(0,20);
	$hasil = $a + $b;
	$_SESSION["hasil"] = $hasil;
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
            <p>Belajar Matematika Lebih Menyenangkan</p>
            </center>
        </header>
        <br>
        <center>
            <form action="cek.php" method="POST">
                <label><h4>Hallo <?php echo $_SESSION["name"];?>, tetap semangat ya...you can do the best!!!</h4><label>
                <label><h4>Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?></i></h4><label>
                <label>Berapakah <?php echo $a; ?> + <?php echo $b; ?> =</label>>
                <input name="hasil" placeholder="Masukkan Jawaban" type="number" required>
                <button type="submit" value="jawab">Jawab</button>
            </form>
        </center>
</body>
</html>