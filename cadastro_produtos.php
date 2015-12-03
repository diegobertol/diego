    <?php 
    include_once ("global/header.php");
    include_once ("global/global.php");
    include_once ("global/produto.php");
    include_once ("global/usuario.php");

    if(!estaLogado()){
        header("Location: /index.php");
    }
    if(
        isset($_POST['nome']) and
        isset($_POST['valor']) and
        isset($_POST['qtd']) and
        isset($_POST['validade'])
    ){
        cadastro($_POST['nome'], $_POST['valor'], $_POST['qtd'], $_POST['validade']);
    }
 ?>

<a href="sair.php">Sair</a>
<form method="post">
    <div class="row login">
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Nome:
                <input type="text" name="nome" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Valor:
                <input type="text" name="valor" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Quantidade:
                <input type="text" name="qtd" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Data de Validade (se tiver):
                <input type="text" name="validade" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <input type="submit" Value="Cadastrar" class="button tiny botao" />
        </div>
    </div>
</form>

<form action="lista_produtos.php">
    <div class="large-12 small-12 medium-12 columns">
            <input type="submit" Value="Ver Produtos cadastrados" class="button tiny botao" />
        </div>
</form>
<?php include_once ("global/footer.php"); ?>