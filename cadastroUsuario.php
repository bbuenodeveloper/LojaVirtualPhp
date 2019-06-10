<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
    <?php include_once "header.php"; ?>

<main class="container">
    <section class="row">
        <div class="col-md-6">
        <form action="salvarUsuario.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomeUsuario">Nome do usuario</label>
                <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome do Usuario" name="nomeUsuario">
            </div>
            <div class="form-group">
                 <label for="emailUsuario">E-mail</label>
                 <input type="email" step="any" class="form-control" id="emailUsuario" placeholder="E-mail do Usuario" name="emailUsuario">
            </div>
            <div class="form-group">
                 <label for="senhaUsuario">Senha do Usuario</label>
                 <input type="password" step="any" class="form-control" id="senhaUsuario" placeholder="Senha do Usuario" name="senhaUsuario">
            </div>
            <div class="form-group">
                <label for="nivelAcesso">Nível de Acesso</label>
                <select name="nivelAcesso" id="nivelAcesso">
                    <option selected disabled>Selecione o nível!</option>
                    <option value="0">Administrador</option>
                    <option value="1">Usuario</option>
                </select>
            </div>
                 <button class="btn btn-success" type="submit">Finalizar Cadastro</button>
        </form>
        </div>
    </section>
</main>


</body>
</html>