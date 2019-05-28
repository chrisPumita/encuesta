<?php
	$txt_name= $_POST["txtName"];
	$txt_app= $_POST["txtApP"];
	$txt_apm= $_POST["txtApM"];
	$txt_edad= $_POST["edad"];
	$sexo_opt= $_POST["sexo"];
	$tel= $_POST["txtTel"];
	$email= $_POST["txtMail"];
	//DATOS ESCOLARES
	$escolaridad= $_POST["LISTescoladad"];
	$gustoEsc= $_POST["RadioEst"];
	$ocupacion= $_POST["LISTocupacion"];
	$gustoOcu= $_POST["RadioOcup"];
/*
	if (!isset($_POST["gusto1"])) $n1 = "0"; else $n1 = "1";
	if (!isset($_POST["gusto2"])) $n2 = "0"; else $n2 = "1";
	if (!isset($_POST["gusto3"])) $n3 = "0"; else $n3 = "1";
	if (!isset($_POST["gusto4"])) $n4 = "0"; else $n4 = "1";
	if (!isset($_POST["gusto5"])) $n5 = "0"; else $n5 = "1";
	if (!isset($_POST["gusto6"])) $n6 = "0"; else $n6 = "1";
	if (!isset($_POST["gusto7"])) $n7 = "0"; else $n7 = "1";
 */
	$n1 = (!isset($_POST["gusto1"])) ? "0" : "1";
	$n2 = (!isset($_POST["gusto2"])) ? "0" : "1";
	$n3 = (!isset($_POST["gusto3"])) ? "0" : "1";
	$n4 = (!isset($_POST["gusto4"])) ? "0" : "1";
	$n5 = (!isset($_POST["gusto5"])) ? "0" : "1";
	$n6 = (!isset($_POST["gusto6"])) ? "0" : "1";
	$n7 = (!isset($_POST["gusto7"])) ? "0" : "1";

	$textoLong= $_POST["textoLargo"];

	//include 'conexion.php';
	$host = "localhost";
	$usuario = "root";
	$password = "";

/*
	$host = "localhost";
	$usuario = "id9744168_fesc";
	$password = "system32";

 */

	$conectar = mysqli_connect($host,$usuario,$password);
	mysqli_select_db($conectar,"encuesta_db");
	//mysqli_select_db($conectar,"id9744168_encuesta");

	mysqli_query($conectar,"
		INSERT INTO `registros` (`id_cuestionario`, `nombre`, `app`, `apm`, `edad`, `sexo`, `telefono`, `correo`, `gradoEst`, `gustoEst`, `ocupacion`, `gustoOcupacion`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `gustoTXT`) 
		VALUES ('', '$txt_name', '$txt_app', '$txt_apm', '$txt_edad', '$sexo_opt', 
		'$tel', '$email', '$escolaridad', '$gustoEsc', '$ocupacion', '$gustoOcu', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$n7', '$textoLong')");
	echo "<br>";
	$result = mysqli_query($conectar,"SELECT * FROM registros");
	$numRegistros = mysqli_num_rows($result);
	echo "<br>";
	echo "En numero de registros encontrados son: $numRegistros ";
	echo "<br>";
	echo "<br><a href='index.html'> regresar a la pagina principal</a>";
 ?>