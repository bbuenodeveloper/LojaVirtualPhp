<?php 
        if($_POST){
            $nomeCompleto = $_POST["nomeCliente"];
            $nomeProduto = $_POST["nomeProduto"];




        }else {
            header("location:index.php");
        }
         ?>


<!DOCTYPE html>
<html lang="en">
    <?php include "head.php"; ?> 
<body>
    <?php include "header.php"; ?>

<main class="container">
    <section class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
               Olá <?php echo $nomeCompleto; ?> parabens pela sua compra do produto <?php echo $nomeProduto; ?>
            </div>
        </div>
            <div class="col-md-12">
                <a href="index.php" class="btn btn-primary">Voltar para home!</a>
            </div>

    </section>
</main>

</body>
</html>

