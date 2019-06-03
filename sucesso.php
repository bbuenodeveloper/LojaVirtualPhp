<?php 

    function validarCompra($dadosCompras){
        $erros = [];
        if(!$dadosCompras){
            $erros[] = "Não foi recebido nenhum dado para realizar a compra!";
        }
        if(!validarNome($dadosCompras["nomeCliente"])){
            $erros[] = "verifique se seu nome esta correto";
        }
        if(!validarCPF($dadosCompras["cpfCliente"])){
            $erros[] = "CPF invalido, por favor verifique";
        }
        if(!validarCartao($dadosCompras["cartaoCliente"])){
            $erros[] ="Numero de Cartão invalido";
        }
        if(!validarDataValidade($dadosCompras["dataValidadeCartao"])){
            $erros[] ="Data de validade vencida";
        }
        if(!validarCVV($dadosCompras["cvvCartao"])){
            $erros[] = "Numero de CVV invalido";
        }
        return $erros;
    }
    
 ?>


<!DOCTYPE html>
<html lang="en">
    <?php include "head.php"; ?> 
<body>
    <?php include "header.php"; ?>

<main class="container">
    <section class="row">

        <?php 
        $errosValidacao = validarCompra($_POST);
        if(count($errosValidacao) > 0 ): ?>
        <div class="col-md-12">
            <!-- Exibir erros de cadastro -->
            <ul>
            <?php foreach($errosValidacao as $erro): ?>
                    <li><?php echo $erro; ?></li>
                    <?php endforeach; ?>
            </ul>
        
        </div>
        <?php else: ?>
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
               Olá <?php echo $_POST['nomeCliente']; ?> parabens pela sua compra do produto <?php echo $_POST['nomeProduto']; ?>
            </div>
        </div>
        <?php endif; ?>
            <div class="col-md-12">
                <a href="index.php" class="btn btn-primary">Voltar para home!</a>
            </div>

    </section>
</main>

</body>
</html>

