<?php

	include("Exemplo.class.php");


	//Instancia de objeto!

	$exemplo3 = new Exemplo();
	$exemplo3->setVar1('Nomes de Alunos');
	echo $exemplo3->pegaVar1();
	echo "<hr />";


	$exemplo = new Exemplo();
	$exemplo->setVar1('Asdrolbo');
	echo $exemplo->pegaVar1();
	echo "<br />";
	
	
	$exemplo2 = new Exemplo;
	$exemplo2->setVar1('Linho');
	echo $exemplo2->pegaVar1();
	echo "<br />";





	/*$exempl o2 = new Exemplo;
	/*$exemplo2->var2 = 'Gui';
		/*
		echo $exemplo ->var2;
		echo "<br />";
		echo $exemplo2 ->var2; */

		/*Exemplo::$var3 = 'Outra variavel';
		echo Exemplo::$var3;
		echo "<br />";

		Exemplo::metodoStatico();  */


//$exemplo->var1 = "Ola"; ERRO FATAL O PHP NÃO IRÁ RODAR!
?>



