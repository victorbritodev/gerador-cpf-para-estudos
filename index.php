<!DOCTYPE html>
<html>
<head>
	<title>Gerador de CPF - Victor Brito DEV</title>
</head>
<center>
<body style="background-color: #7CFC00; font-color: white;">
<?php

if (isset($_POST['victordev']))
{
	$cpfaleatorio = rand(100, 999);
	$cpfaleatorioDois = rand(100, 999);
	$cpfaleatorioTres = rand(100, 999);
	$cpfaleatorioQuatro = rand(100, 999);
	$cpfaleatorioCinco = rand(10, 99);
	echo "O CPF gerado é: 
😊 <br>";
	echo $cpfaleatorio . '.' . $cpfaleatorioDois . '.' . $cpfaleatorioTres . '-'. $cpfaleatorioCinco;
}
?>
<form method="post">
	<input name="victordev" type="submit" value="Gerar um CPF.">
</form>
</body>
</html>