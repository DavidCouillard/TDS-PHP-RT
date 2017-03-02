<form>
	<input type="number" name = "b">
	<input type="number" name = "b">
	<input type="submit" value="Ajouter">
</form>

<?php
if(isset($_GET["a"]) && isset($_GET["b"])){
	$resultat=$_GET["a"]+$_GET["b"];
	echo "La somme est $resultat";
}
?>