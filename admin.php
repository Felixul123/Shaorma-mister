
<html>
<head><title> Admin page </title>

<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

<a href = 'index1.html'> <img src = 'mister.jpg' style = 'width: 100px; height: auto;'> </a>
<div class= "wrapper"> 
<h1> Comenzi </h1>

<table class = "tbl">
<tr class = "tabel-th"> 
   <th>id_comanda</th>
   <th>id_produs</th>
   <th>nume_client</th>
   <th>telefon</th>
   <th>email</th>
   <th>adresa</th>

</tr>
<?php
  $con = mysqli_connect('localhost', 'root', '', 'shaorma_mister');
  $q = "SELECT * FROM vanzare";
  $res = mysqli_query($con,$q);
  while($row = mysqli_fetch_array($res)) {
	  echo "<tr>
   <td> $row[id_comanda] </td>
   <td> $row[id_produs] </td>
   <td> $row[nume_client]</td>
   <td> $row[telefon] </td>
   <td> $row[email] </td>
   <td> $row[adresa] </td>
  <td> <a href= 'update-user.php?id_comanda=$row[id_comanda]' class= 'btn-primary'> Update </a>
        <a href= 'delete-user.php?id_comanda=$row[id_comanda]' class= 'btn-danger'> Delete </a>
		</td>
</tr>";
	  
  }
?>

</table>
</div>




</body>
</html>