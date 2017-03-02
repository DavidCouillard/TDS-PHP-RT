<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<a href="?nb=2"> Affichage de 2 Hello</a><br>
<a href="?nb=5"> Affichage de 5 Hello</a><br>
<a href="?nb=51"> Affichage de 51 Hello</a><br>

<form>
	<label for="nb">Nombre : </label>
	<input id="nb" name="nb" type="number" max="200">
</form>
<?php
	$texte="Hello (dynamique)<br>";
	$i=0;
	$max=$_GET["nb"];
	$max=min(200,$max);

	while ($i<$max){
        $color="";
        if ($i%2==0)
            $color="color:red;";
        elseif ($i%3==0)
            $color="color=green;";
		echo "<span style = '{color}font-size:{$i}pt'>{$texte}</span>";
		$i++;
	}
	echo $texte;
	
?>
</body>
</html>