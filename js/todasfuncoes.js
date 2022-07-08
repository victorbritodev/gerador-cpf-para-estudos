function geracpf()
{
	numero1 = Math.floor(Math.random() * (999 - 100)) + 100;
	numero2 = Math.floor(Math.random() * (999 - 100)) + 100;
	numero3= Math.floor(Math.random() * (999 - 100)) + 100;
	numero4= Math.floor(Math.random() * (10 - 99)) + 99;
	document.getElementById('cpfbrito').value = "" + numero1 + "." + numero2+ "." + numero3 + "-" + numero4 + "";
}
function gerarg()
{
	numero1 = Math.floor(Math.random() * (999 - 100)) + 100;
	numero2 = Math.floor(Math.random() * (999 - 100)) + 100;
	numero3= Math.floor(Math.random() * (1 - 9)) + 9;
	document.getElementById('rg').value = "" + numero1 + "" + numero2+ "" + numero3 + "";
}
function gerasenhain()
{
	numero1 = Math.floor(Math.random() * (9999 - 1000)) + 100;
	document.getElementById('senha').value = numero1;

}
