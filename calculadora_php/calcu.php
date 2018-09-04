<?php 
		if ($_POST ["valor1"] !="" ){
		if ($_POST["operador"] == "suma") {
            
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="index.html">Volver</a>');
            
		} elseif ($_POST["operador"] == "resta") {
            
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
            print ('<br /><a href="index.html">Volver</a>');
            
		} elseif ($_POST["operador"] == "multi") {
            
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="index.html">Volver</a>');
            
		} elseif ($_POST["operador"] == "div") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="index.html">Volver</a>');
            
		}elseif ($_POST["operador"] == "porc") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]/100);
			print ('<br /><a href="index.html">Volver</a>');
            
		}elseif ($_POST["operador"] == "pt") {
			print ($resultado = pow($_POST ["valor1"],$_POST ["valor2"]));
			print ('<br /><a href="index.html">Volver</a>');
            
		}elseif ($_POST["operador"] == "rc") {
			print ($resultado = sqrt($_POST ["valor1"]));
			print ('<br /><a href="index.html">Volver</a>');
            
		}elseif ($_POST["operador"] == "log") {
			print ($resultado = log($_POST ["valor1"],$_POST ["valor2"]));
			print ('<br /><a href="index.html">Volver</a>');
            
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="index.html">Volver</a>');
	}
?>
