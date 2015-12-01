<?php include_once ("template/global.php"); ?>
<?php
    if(
        isset($_POST['email']) and
        isset($_POST['senha'])
    ){
        $erro = login();
    }
?>

<?php include_once ("template/header.php"); ?>

<?php if(isset($erro)){ ?>

    <div data-alert class="alert-box alert">
        <?= $erro ?>
        <a href="#" class="close">&times;</a>
    </div>

<?php } ?>


<form method="post">
    <div class="row login">
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Email:
                <input type="email" name="email" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                senha:
                <input type="password" name="senha" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <input type="submit" Value="Entrar" class="button tiny botao" />
        </div>
    </div>
</form>

<form action="cadastro.php">
    <div class="large-12 small-12 medium-12 columns">
            <input type="submit" Value="Cadastrar-se" class="button tiny botao" />
        </div>
</form>
<?php include_once ("template/footer.php"); ?>