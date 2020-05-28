<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<title>Resultado IMC</title>
  </head>
<body> 
<?php

    $nome   = $_POST['nome1'];
    $idade  = $_POST['idade1'];
    $peso   = $_POST['peso1'];
    $altura = $_POST['altura1'];

    $nome2 = $_POST['nome2'];
    $idade2 = $_POST['idade2'];
    $peso2 = $_POST['peso2'];
    $altura2 = $_POST['altura2';]

    $nome3 = $_POST['nome3'];
    $idade3 = $_POST['idade3'];
    $peso3 = $_POST['peso3'];
    $altura2 = $_POST['altura3';]

    function calculo(){
      $conta1 = $altura*$altura;
	  	$conta2 = $peso/$conta1;
		
	    $resultado = number_format($conta2);
    }

    function categoria(){
      $abaixo = 'Abaixo do Peso';
      $normal = 'Peso Normal';
      $sobrepeso = 'Sobrepesso';
      $obesidade1 = 'Obesidade Grau 1';
      $obesidade2 = 'Obesidade Grau 2';
      $obesidade3 = 'Obesidade Grau 3';

      if ($resultado < 18,5) {
          echo '<p>Seu IMC é' .$resultado 'e está </p>' .$abaixo;
      }
      elseif($resultado >= 18,5 or $resultado <= 24,9){
          echo '<p>Seu IMC é' .$resultado 'e está </p>' .$normal;
      }
      elseif($resultado >= 25,0 or $resultado <= 29,9){
          echo '<p>Seu IMC é' .$resultado 'e está </p>' .$sobrepeso;
      }
      elseif($resultado >= 30,0 or $resultado <= 34,9){
        echo '<p>Seu IMC é' .$resultado 'e está </p>' .$obesidade1;
      }
      elseif($resultado >= 35,0 or $resultado <= 39,9){
          echo '<p>Seu IMC é' .$resultado 'e está </p>' .$obesidade2;
      }
      elseif($resultado >= 40,0){
        echo '<p>Seu IMC é' .$resultado 'e está </p>' .$obesidade3;
      }
    }