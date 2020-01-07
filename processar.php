<!-- _________________________
|  Criado por Irvanio Braga   |
|  Youtube: Irvanio Braga     |
|  Facebook: Irvanio Braga    |
|  Todos Direitos reservados  |
____________________________
-->

<?php

    session_start();
    include("conexao.php");

    $consult_license = "SELECT * FROM licencas ORDER BY id DESC LIMIT 1";
    $consutar_licenca = $conexao->query($consult_license) or die($conexao->error);
    while($mostrar_settings = $consutar_licenca->fetch_array()) {
    }

    

    if (isset($_POST['ativar'])) {

        $chave = md5($_POST['chave']);
        $tempo = $_POST['duracao'];
        $adicao = "+$tempo Days";
        $data_actual = "d-m-Y";
        $prazo = strtotime("$adicao");
        $expiracao = date("$data_actual", $prazo);
        $hoje = date("d-m-Y");
        
        $final = explode('-', $expiracao);
        $actual = explode('-', $hoje);
        $d1 = strtotime("$final[2]-$final[1]-$final[0]");
        $d2 = strtotime("$actual[2]-$actual[1]-$actual[0]");
        $dias = ($d1 - $d2)/86400;

        //$dias = ($hoje - $expiracao);

        if(empty($chave)){
            $_SESSION['licenca_invalida'] = true;
            header("Location: expirado.php");
        }elseif(empty($tempo)) {
            $_SESSION['licenca_invalida'] = true;
            header("Location: expirado.php");
        }elseif($chave == "715706fee6d5b3e4c54365154ec32262" && isset($tempo)) {
            $_SESSION['chave_valida'] = true;
		$conexao->query("INSERT INTO licencas (license_key, date_activation, date_experation, days_license) VALUES('$chave', '$hoje', '$expiracao', '$dias')") or die($conexao->error);		 
		header("Location: expirado.php");
        }else {
            $_SESSION['licenca_invalida'] = true;
            header("Location: expirado.php");
        }
		
	}



    
    