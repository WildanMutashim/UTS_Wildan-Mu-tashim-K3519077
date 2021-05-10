<?php    
    session_start();
    include "koneksi.php";
    addPemain($_SESSION["name"], $_SESSION["email"], $_SESSION["score"]);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Game Matematika</title>
</head>
<body>
		<header id="header" class="alt" >
            <center>
			<h1>GAME MATH</h1>
            <p>Belajar Matematika Lebih Menyenangkan <i class="fa fa-smile"></i>
            </center>
        </header>
        <br>
        <form>
            <center>
                <label><h5>Hallo <?php echo $_SESSION["name"];?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.</h5><label>
                <label><h5>Score Anda : <?php echo $_SESSION["score"]; ?></h5><label>
                <label><h5>HALL OF FAME</h5><label>
                <table>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Score</td>
                    <tr>
                    <?php
                    $koneksi = mysqli_connect($host,$username,$pass,$database) or die(mysqli_error());
                    $sql = "SELECT * FROM pemain ORDER BY score DESC LIMIT 10";
                    $result = mysqli_query($GLOBALS['koneksi'], $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row["Nama"] . "</td>";
                            echo "<td>" . $row["Score"] . "</td>";
                            echo "</tr>";
                            $i = $i + 1;  
                        }
                    } else {
                        
                    }
                    mysqli_close($GLOBALS['koneksi']);
                    ?>
                </table>
                <button type="submit"><a href="index.php">Ayo main lagi</a></button>
            </center>
        </form>
</body>
</html>