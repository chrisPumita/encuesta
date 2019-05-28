<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>REPOSTES DE ENTREVISTAS</title>
	<link rel="stylesheet" href="">
	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		  background-color: cadetblue;
		  color: white;
		}
	</style>
</head>
<body>
	<script type="text/javascript">
		function verificar() {
			location.href="index.html";
		}
	</script>
	<?php 
	//iniciamos la consulta de la informacion
	$host = "localhost";
	$usuario = "root";
	$password = "";

	$conectar = mysqli_connect($host,$usuario,$password);
		mysqli_select_db($conectar,"encuesta_db");

	$query= mysqli_query($conectar,"SELECT * FROM `registros`");

	?>
	<h2>Mostrando los registros de la <strong>ENCUESTA</strong></h2>
	<table>
	  <tr>
	    <th>ID</th>
	    <th>NOMBRE</th>
	    <th>EDAD</th>
	    <th>SEXO</th>
	    <th>TELEFONO</th>
	    <th>EMAIL</th>
	    <th>GRADO DE ESTUDIOS</th>
	    <th>OCUPACION</th>
	    <th>GUSTOS</th>
	    <th>MENSAJE</th>
	  </tr>

<?php 
	while ($reg = mysqli_fetch_array($query)) {
		echo "<tr>";
		echo "<td>".$reg['id_cuestionario']."</td>";
		echo "<td>".$reg['nombre']." ".$reg['app']." ".$reg['apm']."</td>";
		//EDAD
		if ($reg['edad']=='1') 
			echo "<td>Bebe</td>";		
		elseif ($reg['edad']=='2') 
			echo "<td>Niño</td>";
		elseif ($reg['edad']=='3') 
			echo "<td>Adolescente</td>";
		elseif ($reg['edad']=='4') 
			echo "<td>Adulto</td>";
		elseif ($reg['edad']=='5') 
			echo "<td>Adulto Mayor</td>";
		//SEXO
		if ($reg['sexo']=='2') 
			echo "<td>MUJER</td>";		
		elseif ($reg['sexo']=='1') 
			echo "<td>HOMBRE</td>";
		echo "<td>".$reg['telefono']."</td>";
		echo "<td>".$reg['correo']."</td>";
		//GRado de Estudios
		if ($reg['gradoEst']=='1') 
			echo "<td>SIN ESTUDIOS <br>";		
		elseif ($reg['gradoEst']=='2') 
			echo "<td>PRIMARIA <br>";
		elseif ($reg['gradoEst']=='3') 
			echo "<td>SECUNDARIA <br>";
		elseif ($reg['gradoEst']=='4') 
			echo "<td>PREPARATORIA <br>";
		elseif ($reg['gradoEst']=='5') 
			echo "<td>UNIVERSIDAD <br>";
		for ($i=0; $i <= (int) $reg['gustoEst']  ; $i++)
			echo "<img src='img/plus.png' alt='star' style='width: 15px; '>";
		echo "</td>";

				//OCUPACION
		if ($reg['ocupacion']=='1') 
			echo "<td>No trabaja <br>";		
		elseif ($reg['ocupacion']=='2') 
			echo "<td>Obrero <br>";
		elseif ($reg['ocupacion']=='3') 
			echo "<td>Empleado <br>";
		elseif ($reg['ocupacion']=='4') 
			echo "<td>Comerciante <br>";
		elseif ($reg['ocupacion']=='5') 
			echo "<td>Servidor Público <br>";
		elseif ($reg['ocupacion']=='6') 
			echo "<td>Areas de Ingeniria <br>";
		elseif ($reg['ocupacion']=='1') 
			echo "<td>Areas de Tecnologias <br>";
		elseif ($reg['ocupacion']=='8') 
			echo "<td>Areas de la Salud <br>";
		elseif ($reg['ocupacion']=='9') 
			echo "<td>Areas Administrativas/Sociales <br>";
		elseif ($reg['ocupacion']=='10') 
			echo "<td>Artista <br>";
		elseif ($reg['ocupacion']=='11') 
			echo "<td>Empresario <br>";
		for ($i=0; $i <= (int) $reg['gustoOcupacion']  ; $i++)
			echo "<img src='img/plus.png' alt='star' style='width: 15px; '>";
		echo "</td>";

//GUSTOS
		echo "<td><ul>";
		if ($reg['g1']=='1')
			echo "<li type='square'>Deporte</li> ";
		if ($reg['g2']=='1')
			echo "<li type='square'>Lectura</li> ";
		if ($reg['g3']=='1')
			echo "<li type='square'>Musica</li> ";
		if ($reg['g4']=='1')
			echo "<li type='square'>Dibujo</li> ";
		if ($reg['g5']=='1')
			echo "<li type='square'>Canto</li> ";
		if ($reg['g6']=='1')
			echo "<li type='square'>Estudio</li> ";
		if ($reg['g7']=='1')
			echo "<li type='square'>Viajar</li> ";
		echo "</ul></td>";
		echo "<td>".$reg['gustoTXT']."</td>";
		echo "</tr>";
	}
 ?>
	</table>
	<input type="button" class="boton" value="SALIR" onclick="verificar()">

</body>
</html>