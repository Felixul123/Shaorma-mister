
<html>
<head><title> Shaorma mister </title>

<style>
 body {
      background-image: url('negru.jpg');
      background-size: 100% 100%;
      background-repeat: no-repeat;
	  background-color: rgba(255, 255, 255, 0.5);
	  background-attachment: fixed;
	  }
	 
	</style>
	
	<script>
 function checkAll(source) {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  for (var i = 0; i < checkboxes.length; i++) {
     if (checkboxes[i] !== source && !checkboxes[i].classList.contains('exception')) {
      checkboxes[i].checked = source.checked;
    }
  }
}
</script>

<link rel="stylesheet" type="text/css" href="styles.css">
	
</head>

<body>

 <img src = 'mister.jpg' style = 'width: 100px; height: auto;'> </a>
<a href="produse.php"><h2> <div class= "produse-text"> PRODUSE </h2></div></a>
     <a href="index1.html"><h2> <div class= "home-text"> HOME </h2></div></a>
	 <a href="despre.html"><h2> <div class= "despre-text"> DESPRE </h2></div></a>
	 


<?php
$conn = mysqli_connect('localhost', 'root', '', 'shaorma_mister');


if(isset($_GET['id_produs'])) {
    // Retrieve the menu item ID from the URL
    $id_produs = $_GET['id_produs'];
	

    // Query to fetch menu item details based on the provided menu item ID
    $sql = "SELECT * FROM produse WHERE id_produs = $id_produs";
    $result = $conn->query($sql);

        // Fetch menu item details
        $row = mysqli_fetch_assoc($result);
        $menu_item_name = $row["nume_produs"];

      echo "<div style = 'position: relative; color: white; top: 40px; font-family: Seri, Times New Roman;'><h2> $menu_item_name buna alegere :) </h2></div>";
     

    } 
?>


         <div class = 'alege-text'><h1><u>Alege ingredintele:</u>  <input type = 'checkbox' onclick ='checkAll(this)'/><i> De Toate </i> <br><h2>(Aici dispare misterul)</h2></h1></div>
         
		<form method='post' action='script1.php?id_produs= $id_produs'>
        
       <br><div class = "carne-text"><h2>Carne </div></h2></br>

<img src = "bunbun.jpg" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: 90px "> <img src = "falafel.jpg" style = " width: 120px; height: auto; border-radius: 50%; position: relative; top: 90px; left: 90px "> 
<br><div class = "optiunic-text"><input type = "checkbox" name = "ingredient[]" value = "carne" class = "exception"> Carne de porc </div>
      <div class = "falafel"><input type = "checkbox" name = "ingredient[]" value = "falafel" class = "exception"> Falalfel </div>
  
   <br><h2><div class = "legume-text"> Legume </div></h2></br>
   <img src = "cartofi.jpg" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: 50px ">
   <img src = "varza.png" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: 50px; left: 100px; ">
   <img src = "ceapa.jpg" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: 50px; left: 180px; ">
   <img src = "castravete.jpg" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: 50px; left: 260px; ">
   <img src = "rosi.jpg" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: 50px; left: 320px ">
<div class = "cartofi"> <input type = "checkbox" name = "ingredient[]" value = "cartofi"> cartofi prajiti </div>
<div class = "varza"> <input type = "checkbox" name = "ingredient[]" value = "varza"> varza </div>
<div class = "ceapa"> <input type = "checkbox" name = "ingredient[]" value = "ceapa"> ceapa </div>
<div class = "castravete"> <input type = "checkbox" name = "ingredient[]" value = "castraveti"> castraveti murati </div>
<div class = "rosie"> <input type = "checkbox" name = "ingredient[]" value = "rosii"> rosii </div>

 <br><h2><div class = "sosuri-text"> Sosuri </div></h2></br>
 <img src = "ketchup.jpg" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: -90px ">
 <img src = "maioneza.jpeg" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: -90px; left: 100px; ">
 <img src = "tza.jpg" style = " width: 120px; height: 120px; border-radius: 50%; position: relative; top: -90px; left: 180px">
<div class = "ketchup"> <input type = "checkbox" name = "ingredient[]" value = "ketchup"> ketchup </div>
<div class = "maioneza"> <input type = "checkbox" name = "ingredient[]" value = "maioneza"> maioneza </div>
<div class = "tza"> <input type = "checkbox" name = "ingredient[]" value = "tzatziki"> tzatziki </div>

  <br><div class = "spice-text"> Spice </div></br>
<div class = "iute"> <input type = "checkbox" name = "ingredient[]" value = "sos iute" class = "exception"> sos iute </div> &#127798
        

        <br>
        
		<div class = 'box3'>
        <input type='hidden' name= 'id_produs' value='$id_produs'>
		<div class = 'livrare'>
		<h2> Detalii livrare </h2>
		<br><label for= 'nume_client'> Nume complet: </label> <input type= 'textbox' name = 'nume_client' required>
		<br><label for= 'telefon'> Telefon: </label> <input type= 'textbox' name = 'telefon' required>
		<br><label for='email'>Email: </label><input type= 'email' name = 'email' required>
		<br><label for='adresa'> Adresa: </label> <input type= 'textbox' name = 'adresa' required>
		<br><input type = 'submit' name = 'comanda' value = 'comanda' class = 'buton'>
		</div>
		</div>
       </form>

    

  
</body>
</html>
