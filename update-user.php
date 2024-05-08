<?php
$con = mysqli_connect('localhost', 'root', '', 'shaorma_mister');

$id_comanda = "";
$id_produs = "";
$nume_client = "";
$telefon = "";
$email = "";
$adresa ="";

$errorMessage = "";

 if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	 $id_comanda = $_GET['id_comanda'];
	 $q1 = "SELECT * FROM vanzare WHERE id_comanda = $id_comanda";
	 $res = mysqli_query($con, $q1);
	 $row = mysqli_fetch_array($res);
	 
	 $id_produs = $row['id_produs'];
	 $nume_client = $row['nume_client'];
	 $telefon = $row['telefon'];
	 $email = $row['email'];
	 $adresa = $row['adresa'];
	 
 }
 
 else {
	$id_comanda = $_POST['id_comanda'];
	$id_produs = $_POST['id_produs'];
	 $nume_client = $_POST['nume_client'];
	 $telefon = $_POST['telefon'];
	 $email = $_POST['email'];
	 $adresa = $_POST['adresa'];
	 
	 do {
		  if( empty($id_produs) || empty($nume_client) || empty($telefon) || empty($email) || empty($adresa) ) {
		 $errorMessage = "Toate spatiile sunt obligatorii";
		 break;
		 }
		 
		 $q2 = "UPDATE vanzare SET id_produs = '$id_produs', nume_client = '$nume_client', telefon = '$telefon', email = '$email', adresa = '$adresa' WHERE id_comanda = $id_comanda";
	     $res = mysqli_query($con,$q2);
		 
		 if(!$res) {
			 $errorMessage = "Invalid query: ".$connection->error;
			 break;
		 }
		 
		 header("location: admin.php");
		 exit;
	
	} while(true);
 }
?>

<html>
<head><title> Update </title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>

<h2> Update comanda </h2>
<form method = "POST">

<input type = "hidden" name = "id_comanda" value = "<?php echo $id_comanda; ?>">

<label> Id_produs </label><input type = "text" name = "id_produs" value = "<?php echo $id_produs; ?>">
<label> Nume_client </label><input type = "text" name = "nume_client" value = "<?php echo $nume_client; ?>">
<label> Telefon </label><input type = "text" name = "telefon" value = "<?php echo $telefon; ?>">
<label> Email </label><input type = "text" name = "email" value = "<?php echo $email; ?>">
<label> Adresa </label><input type = "text" name = "adresa" value = "<?php echo $adresa; ?>">

<button type = "submit"> Submit </button>

</form>
</body>
</html>