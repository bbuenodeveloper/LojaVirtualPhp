<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
    <?php include_once "header.php"; ?>

<main class="container">
    <section class="row">
        <div class="col-md-6">
        <form action="logarUsuario.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                 <label for="emailUsuario">E-mail</label>
                 <input type="email" step="any" class="form-control" id="emailUsuario" placeholder="E-mail do Usuario" name="emailUsuario">
            </div>
            <div class="form-group">
                 <label for="senhaUsuario">Senha do Usuario</label>
                 <input type="password" step="any" class="form-control" id="senhaUsuario" placeholder="Senha do Usuario" name="senhaUsuario">
            </div>
                <button class="btn btn-success" type="submit">Logar</button>
                <p>Ou</p>
                <a class="btn btn-primary" href="cadastroUsuario.php">Cadastre-se</a>
        </form>
        </div>
    </section>
</main>


</body>
</html>