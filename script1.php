<html>
<head><title> Confirmare comanda </title>

<style>
 body {
      background-image: url('https://img.freepik.com/premium-photo/traditional-shawarma-with-meat-vegetables-flatbread-fire-black-background_124507-28609.jpg?w=1380');
      background-size: 100% 100%;
      background-repeat: no-repeat;
	  background-attachment: fixed;
	  }
	 
	</style>

<link rel="stylesheet" type="text/css" href="styles.css">

</head>
</html>

<?php
$con = mysqli_connect('localhost', 'root', '', 'shaorma_mister');

      $id_produs = "";
      $nume = "";
	  $telefon = "";
	  $email = "";
	  $adresa = "";



if(isset($_GET['id_produs']))
{
	$id_produs = $_GET['id_produs'];
	$q1 = "SELECT * FROM produse WHERE id_produs=$id_produs";
	$res = mysqli_query($con,$q1);
	if ($res) {
        while($row = mysqli_fetch_array($res)) {
            echo '<div class = box2> 
   <h2 align = "center"> Datele au fost inregistrate cu succes! </h2>
   <br> Ati comandat '.$row['nume_produs'].' in valoare de '.$row['pret'].' lei';
        }
    } else {
        echo "Error executing query: " . mysqli_error($con);
    }
   
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	  $nume = $_POST['nume_client'];
	  $telefon = $_POST['telefon'];
	  $email = $_POST['email'];
	  $adresa = $_POST['adresa'];
    $q2 = "INSERT INTO vanzare (id_produs, nume_client, telefon, email, adresa) VALUES ('$id_produs', '$nume', '$telefon', '$email', '$adresa')";	
	$res = mysqli_query($con, $q2);
	
  }

if(isset($_POST['comanda'])) {
	$ing = $_POST['ingredient'];	
	echo ' cu urmatoarele ingrediente: ';
	foreach($ing as $item) {
		echo ' '.$item;
	}
	echo '<br><h2 align = "center">Comanda va ajunge in curand la dvs. Multumim ca ati ales shaormeria noastra!</h2>';
}


	



?>









