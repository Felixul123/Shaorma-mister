
<head><title> Shaorma mister </title>
<style>
 body {
      background-image: url('bun.jpg');
      background-size: 100% 100%;
      background-repeat: no-repeat;
	  background-attachment: fixed;
	  }
	 
	</style>
	
	
 <link rel="stylesheet" type="text/css" href="styles.css">

<body>
 <img src = 'mister.jpg' style = 'width: 100px; height: auto;'> </a>
<a href="produse.php"><h2> <div class= "produse-text"> PRODUSE </h2></div></a>
     <a href="index1.html"><h2> <div class= "home-text"> HOME </h2></div></a>
	 <a href="despre.html"><h2> <div class= "despre-text"> DESPRE </h2></div></a>
	 
	 
<?php
$con = mysqli_connect('localhost', 'root', '', 'shaorma_mister');

$sql = "SELECT * FROM produse";
$result = $con->query($sql);

echo "<div class='products-container'>";
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<div class = 'box'>";
        echo "<div class = 'product'>";
		echo "<img scr = ".$row['imagine'].">";
        echo "<img src='" . $row["imagine"] . "' alt='" . $row["nume_produs"] . "' width = '100' height = '100'>"; // Assuming $row["image_path"] contains the path to the image
        echo "<h1 font color = 'yellow'>" . $row["nume_produs"] . "</h1>";
        echo "<p font color = 'white'>Pret: ". $row["pret"]." lei </p>";
        echo "<input type='hidden' name='id_produs' value='" . $row["id_produs"] . "'>";
        echo "<a href = 'ingrediente.php?id_produs=".$row['id_produs']."' class='btn2'> Comanda </a>";
        echo "</div>";
        echo "</div>";
    }
}


?>


	 
	
</body>

