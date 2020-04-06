<?php


	//classe ABSTRCT funciona apenas para ser chamada!
	abstract class test{

		public function func1(){
			echo "chamando funcao 1º";
			echo "<br />";
		}

		abstract function func2();

	}

	class Principal2{

			public static function outroMetodoStatico(){
				echo "Outro metodo Estatico!";
			}
		}

	class Principal extends test{
		public function func2(){
			echo "Estou declarando oficialmente um metodo abstrato
			dentro da classe Principal!";

		}

		public static function metodoestatico(){
			echo "metodo estatico!";

		}

		
		public function funcao(){
			//Principal::metodoestatico();
			//self::metodoestatico();
			Principal2::outroMetodoStatico();

		}
	}

	$principal = new Principal;
	$principal->funcao();
	//Principal::metodoestatico();

	//$principal ->func1();
	//$principal ->func2();

?>