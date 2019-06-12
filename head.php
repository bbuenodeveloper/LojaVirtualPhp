<?php
    include "funcoes.php";

    $usuario = isset($_SESSION['usuario'])?$_SESSION['usuario']:"";
    //$usuario = "";

    
    //$produtos = [
       // "produto1" => ["nome" =>"Curso Fullstack","descricao"=>"O curso fullstack ensina programação","preco"=> 1200,"img"=>"img/fullstack1.jpg"],
       // "produto2" => ["nome" =>"Curso Mobile android","descricao"=>"O curso mobile ensina criar app","preco"=> 1400,"img"=>"img/android1.jpg"],
      //  "produto3" => ["nome" =>"Curso Fullstack","descricao"=>"O curso fullstack ensina programação","preco"=> 1200,"img"=>"img/fullstack1.jpg"],
      //  "produto4" => ["nome" =>"Curso Mobile android","descricao"=>"O curso mobile ensina criar app","preco"=> 1400,"img"=>"img/android1.jpg"]
    //];

   // $produtos = addProduto("Curso de UX", "Curso incrivel", 2000, "img/fullstack1.jpg", $produtos);
    

    //$categorias = ["Cursos","Tutoriais","Artigos","Forum","códigos"];

    $jsonProdutos = file_get_contents('Produtos.json');
    $produtos = json_decode($jsonProdutos, true);
    $produtos = $produtos['Produtos'];


    //addProduto("Cruso Mobile Android", "Curso para criar um app",2000,"img/android1.jpg");
    


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>