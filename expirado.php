<!-- _________________________
|  Criado por Irvanio Braga   |
|  Youtube: Irvanio Braga     |
|  Facebook: Irvanio Braga    |
|  Todos Direitos reservados  |
____________________________
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Licença Expirada</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="estilos/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="estilos/sweetalert.css" rel="stylesheet">
  <link rel="stylesheet" href="estilos/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="estilos/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a><b>Activação</b></a>
  </div>

<?php
				if(isset($_SESSION['licenca_invalida'])):
			?>
			  <div>
      <a style="background-color: #ff0019; color: #fff" class="btn btn-block">
          
          Chave de licança inválida
        </a>
</div>
<br>
			<?php
			endif;
			unset($_SESSION['licenca_invalida']);
            ?>


<?php
				if(isset($_SESSION['chave_valida'])):
			?>
			  <div>
        <div>
      <a style="background-color: #0db96c; color: #fff" class="btn btn-block">
          
          Sistema ativado com sucesso <a style="padding-left: 90px;" href="index">Clique aqui para continuar</a>
        </a>
</div>
<br>
			<?php
			endif;
			unset($_SESSION['chave_valida']);
            ?>

        <div class="card">
    <div class="card-body register-card-body">
      

      <form action="processar.php" method="post" autocomplete="off">
        <div class="input-group mb-3">
          <input type="text" name="chave" class="form-control" placeholder="Chave de Activação">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <select class="form-control select2" name="duracao">
                    <option value="10">10 Dias (Versão Teste)</option>
                    <option value="90">3 Meses</option>
                    <option value="180">6 Meses</option>
                    <option value="365" disabled="disabled">1 Ano</option>
                  </select>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">

            </div>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="ativar">Activar</button>
          </div>

        </div>
      </form>




    </div>

  </div>
  <br>
  <div class="lockscreen-footer text-center">
    Copyright &copy; <?php echo date('Y'); ?> - Criado por: <a href="https://www.facebook.com/irvanio.braga" target="_blank">Irvanio Braga</a>
  </div>
</div>
</div>
<br>



  

</body>
</html>
