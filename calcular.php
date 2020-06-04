<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<meta charset="UTF-8"/>
	<link href="css/calcular.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<title>Resultado IMC</title>
  </head>
<body> 
<?php
    error_reporting(0);
    $nome   = $_POST['nome1'];
    $idade  = intval($_POST['idade1']);
    $peso   = floatval($_POST['peso1']);
    $altura = floatval($_POST['altura1']);

    $nome2 = $_POST['nome2'];
    $idade2 = intval($_POST['idade2']);
    $peso2 = floatval($_POST['peso2']);
    $altura2 = floatval($_POST['altura2']);

    $nome3 = $_POST['nome3'];
    $idade3 = intval($_POST['idade3']);
    $peso3 = floatval($_POST['peso3']);
    $altura3 = floatval($_POST['altura3']);

    $resultado1 = $peso / ($altura ** 2);
    $resultado2 = $peso2 / ($altura2 ** 2);
    $resultado3 = $peso3 / ($altura3 ** 2);

    function categorias($var){
      $abaixo = 'Abaixo do Peso';
      $normal = 'Peso Normal';
      $sobrepeso = 'Sobrepesso';
      $obesidade1 = 'Obesidade Grau 1';
      $obesidade2 = 'Obesidade Grau 2';
      $obesidade3 = 'Obesidade Grau 3';

      if ($var <= 18.5){
        return $abaixo;
      }
      else if ($var >= 18.5 && $var <= 24.9 ){
        return $normal;
      }
      else if ($var >= 25.0 && $var  <= 29.9){
        return $sobrepeso;
      }
      else if ($var >= 30.0 && $var <= 35.0){
        return $obesidade1;
      }
      else if ($var >= 35.0 && $var <= 39.9){
        return $obesidade2;
      }
      else if ($var >= 40.0){
        return $obesidade3;
      } 
    }

    $imc = ($resultado1 + $resultado2 + $resultado3) / 3;
    $mediaIdade = ($idade + $idade2 + $idade3) / 3;

    ?>
    <div id="resultado">
      <h1 class="usuario">Usuário 1</h1>
      <p><?php echo $nome ?> <?php echo $idade ?> anos</p>
      <p>Seu imc é <?php echo $resultado1 ?> e você está com <?php echo categorias($resultado1)?></p>
      <p>Resultado obtido a partir do peso <?php echo $peso ?> e da altura <?php echo $altura ?></p>

      <h1 class="usuario" >Usuário 2</h1>
      <p><?php echo $nome2 ?> <?php echo $idade2 ?> anos</p>
      <p>Seu imc é <?php echo $resultado2 ?> e você está com <?php echo categorias($resultado2)?></p>
      <p>Resultado obtido a partir do peso <?php echo $peso2 ?> e da altura <?php echo $altura2 ?></p>

      <h1 class="usuario">Usuário 3</h1>
      <p><?php echo $nome3 ?> <?php echo $idade3?> anos</p>
      <p>Seu imc é <?php echo $resultado3 ?> e você está com <?php echo categorias($resultado3)?></p>
      <p>Resultado obtido a partir do peso <?php echo $peso3 ?> e da altura <?php echo $altura3 ?></p>

      <h2 id="media">Média dos IMCS e Idade dos Usuários</h2>
      <p>A média de imc dos usuários é <?php echo $imc ?> corresponde à categoria <?php echo categorias($var)?></p>
      <p>A média de idade é <?php echo $mediaIdade ?> anos</p>

      <button><a href="index.php">Voltar</a></button>
    </div>

</body>
</html>