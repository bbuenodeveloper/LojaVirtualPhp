<?php 

include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0;
}

if($contadorInputVazio == count($_POST)){
echo "<h1>Você não enviou nenhuma informação sobre o produto</h1>";
echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para o cadastro</a>';
exit;
}

$imgAceitas = ["image/png","image/jpg","image/jpeg"];
$erroEnvio = $_FILES['arquivo']['error'];

$nomeProduto = $_POST['nomeProduto'];
$precoProduto = $_POST['precoProduto'];
$desProduto = $_POST['desProduto'];
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivoTmp = $_FILES['arquivo']['tmp_name'];
$caminhoImg = "img/$nomeArquivo";
$typeFile = $_FILES['arquivo']['type'];

if($erroEnvio !==0){
echo "<h1>Houve um erro no envio do arquivo verifique e tente novamente.</h1>";
echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para o cadastro</a>';
exit;
}

if(array_search($typeFile,$imgAceitas) == false){
echo "<h1>Extensão do arquivo invalida, verifique se o arquivo é uma imagem do tipe png,jpg,jpeg.</h1>";
echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para o cadastro</a>';
exit;  
}

move_uploaded_file($arquivoTmp, "img/$nomeArquivo");

addProduto($nomeProduto, $desProduto, $precoProduto, $caminhoImg)

?>