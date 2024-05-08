<?php
 if(isset($_GET["id_comanda"])) {
	 $id_comanda = $_GET["id_comanda"];
	 $con = mysqli_connect('localhost', 'root', '', 'shaorma_mister');
	 $q = "DELETE FROM vanzare WHERE id_comanda = $id_comanda";
     mysqli_query($con,$q);
 }
 
 header("location: admin.php");
 exit;

?>