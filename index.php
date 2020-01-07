<!-- _________________________
|  Criado por Irvanio Braga   |
|  Youtube: Irvanio Braga     |
|  Facebook: Irvanio Braga    |
|  Todos Direitos reservados  |
____________________________
-->

<?php
	session_start();
	include_once("conexao.php");

    $consult_license = "SELECT * FROM licencas ORDER BY id DESC LIMIT 1";
    $consutar_licenca = $conexao->query($consult_license) or die($conexao->error);
    while($mostrar_settings = $consutar_licenca->fetch_array()) {
        $inicio = $mostrar_settings['date_activation'];
        $final = $mostrar_settings['date_experation'];
        $dias = $mostrar_settings['days_license'];
    }

	if(empty($consutar_licenca)) {
		header("Location: expirado.php");
	}else {

	$data1 = date("d-m-Y");
	$data2 = $final;

	$data1 = explode('-', $data1);
	$data2 = explode('-', $data2);
	
	$d1 = strtotime("$data1[2]-$data1[1]-$data1[0]");
	$d2 = strtotime("$data2[2]-$data2[1]-$data2[0]");
	$dataFinal = ($d2 - $d1)/86400;


	if ($dataFinal == 0) {
		echo "Licença Expirada";
		$_SESSION['activado'] = true;
		header("Location: expirado.php");
	}elseif ($dataFinal > $dias) {
		header("Location: expirado.php");
		echo "Licença Expirada";
	}elseif ($dataFinal < 0) {
		echo "Licença Expirada";
		header("Location: expirado.php");
	}elseif($data1 == $inicio) {
		header("Location: expirado.php");
	}else {
		echo "Licença Activada";
		header("Location: ativado.php");
	}
	}
?>