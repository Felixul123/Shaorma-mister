<?php
  $con = mysqli_connect('localhost', 'root', '', 'shaorma_mister');
  $q = "SELECT * FROM produse";
  $res = mysqli_query($con,$q);
  while($row= mysqli_fetch_assoc($res))
  {
     $id = $row['id_produs'];
	 $nume = $row['nume_produs'];
	 $pret = $row['pret'];
	 $imagine = $row['imagine'];
  }
?>

img src="lipie.jpg" style= "position: absolute; top: 110px; left: 300px; width: 350px; heigth: 530px;">
    <a href = "ingrediente.php?id_produs=$id"><button class="button1"> Mica </button></a>
	<a href = "ingrediente.php?id_produs=$id"><button class="button2"><span> Mare </span></button></a>
	
	<img src="kebab.jpg" style= "position: absolute; top: 110px; left: 1000px; width: 350px; heigth: 600px;">
	<a href = "ingrediente.php?id_produs=$id"><button onclick= "kebab mic" class="button3" ><span> Mic </span></button></a>
    <a href = "ingredi<ente.php?id_produs=$id"><button onclick= "kebab mare" class="button4"><span> Mare </span></button></a>
	
	 <a href = "ingrediente.php?id_produs=$id"><button onclick= "farfurie"class="button5"><span> Farfurie </span></button></a> 
	 
	 <br>Carne </br>

<input type = "checkbox" name = "ingredient[]" value = "carne" class = "exception"> Carne de porc
<input type = "checkbox" name = "ingredient[]" value = "falafel" class = "exception"> Falalfel
  
   <br>Legume </br>
<input type = "checkbox" name = "ingredient[]" value = "cartofi"> cartofi prajiti
<input type = "checkbox" name = "ingredient[]" value = "varza"> varza
<input type = "checkbox" name = "ingredient[]" value = "ceapa"> ceapa
<input type = "checkbox" name = "ingredient[]" value = "castraveti"> castraveti murati
<input type = "checkbox" name = "ingredient[]" value = "rosii"> rosii

 <br> Sosuri </br>
<input type = "checkbox" name = "ingredient[]" value = "ketchup"> ketchup
<input type = "checkbox" name = "ingredient[]" value = "sos de usturoi"> sos de usturoi
<input type = "checkbox" name = "ingredient[]" value = "tzatziki"> tzatziki

  <br>Spice</br>
<input type = "checkbox" name = "ingredient[]" value = "sos iute" class = "exception"> sos iute
<input type = "checkbox" name = "ingredient[]" value = "dulce" class = "exception"> dulce



<h1> Detalii livrare :) </h1>
  <br>Nume: <input type = "textbox" name = "NUME" value = ""></br>
  <br>Adresa: <input type = "textbox" name = "ADRESA" value = ""></br>
  <br>Telefon : <input type = "textbox" name = "TELEFON" value = ""></br>
  <br>Email : <input type = "textbox" name = "EMAIL" value = ""></br>
  <br><button type = "submit">TE ROG</button></br>

</form>

<body>
</html>

// Query to fetch ingredients from the database
        $sql = "SELECT * FROM ingrediente";
        $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo "<input type='checkbox' name='ingrediente[]' value='" . $row['nume_ing'] . "'>";
                echo "<label for='" . $row['nume_ing'] . "'>" . $row['nume_ing'] . "</label><br>";
            }
			
			echo "<div class = 'product'>";
        echo "<h2>" . $row["nume_produs"] . "</h2>";
        echo "<p>Pret: " . $row["pret"] . " lei </p>";
        echo "<input type='hidden' name='id_produs' value='" . $row["id_produs"] . "'>";
        echo "<a href = 'ingrediente.php?id_produs=".$row['id_produs']."'><button> Comanda </button></a>";
        echo "</div>";
		
		<?php

$con = mysqli_connect('localhost', 'root', '', 'shaorma_mister');

$id_comanda = "";
$id_produs = "";
$nume_client = "";
$telefon = "";
$email = "";
$adresa ="";

$errorMessage = "";
$succesMessage = "";

 if($_SERVER['REQUEST_METHOD'] == 'GET') {
	 if(!isset($_GET["id_comanda"])) {
		 header('location: admin.php');
		 exit;
	 }
	 $id_comanda = $_GET["id_comanda"];
	  $q1 = "SELECT * FROM vanzare WHERE id_comanda = $id_comanda";
     $res = mysqli_query($con,$q1);
	 $row = mysqli_fetch_array($res);
	 
	 if(!$row) {
		 header('location: admin.php');
		 exit;
	 }
     $id_produs = $row['id_produs'];
	 $nume_client = $row['nume_client'];
     $telefon = $row['telefon'];
     $email = $row['email'];
     $adresa =  $row['adresa'];

 }
 else {
	 $id_produs = $_POST['id_produs'];
	 $nume_client = $_POST['nume_client'];
     $telefon = $_POST['telefon'];
     $email = $_POST['email'];
     $adresa =  $_POST['adresa'];

	 
	 do {
		 if( empty($id_produs) || empty($nume_client) || empty($telefon) || empty($email) || empty($adresa) ) {
		 $errorMessage = "Toate spatiile sunt obligatorii";
		 break;
		 }
		 
		 $q2 = "UPDATE vanzare SET id_produs = '$id_produs', nume_client = '$nume_client', telefon = '$telefon', email= '$email', adresa = '$adresa' WHERE id_comanda = $id_comanda"; 
		 $res = mysqli_query($con, $q2);
		 
		 header('location: admin.php');
		 exit;
	 } while (true);
 }

?>

<!DOCTYPE html>
<html>
<head><title> Update user</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
<h2 align = "center"> Update user </h2>
<form method="POST">
<input type = "hidden" name = "id_comanda" value = "<?php echo $id_comanda; ?>">

 <br><label> id_produs </label> <input type = "text" name = "id_produs" value = "<?php echo $id_produs?>">
 <br><label> Nume </label> <input type = "text" name = "nume_client" value = "<?php echo $nume_client?>">
 <br><label> Telefon </label> <input type = "text" name = "telefon" value = "<?php echo $telefon?>">
 <br><label> Email </label> <input type = "text" name = "email" value = "<?php echo $email?>">
  <br><label> Adresa </label> <input type = "text" name = "adresa" value = "<?php echo $adresa?>">

 
 <button type= "submit"> Submit </button>
 </form>
 <a href = "admin.php"><button> Cancel </button> </a>



</body>
</html>
