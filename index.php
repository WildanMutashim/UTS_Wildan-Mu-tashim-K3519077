<?php
	session_start();
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;
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
            <?php
                if (isset($_SESSION["email"])) {
            ?>
                <center>
                <label><h4>Hallo <?php echo $_SESSION["name"];?>, selamat datang kembali di permainan ini!</h4><label>
                <button type="submit"><a href="soal.php">Main lagi</a></button>
                <label><h5>Bukan Anda? <a href="ulang.php"> Klik disini</h5></a><label>
                </center>
            <?php
            } else {
            ?>
            <center>
            <form action="soal.php" method="POST">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="name" placeholder="Masukkan Nama" require>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Masukkan Email" require>
                <button type="submit" name="mulai">Mulai Main</button>
            </form>
            </center>
            <?php
                }
            ?>
</body>
</html>