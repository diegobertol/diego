<?php 
    include_once ("global/header.php"); 
    include_once ("global/global.php"); 
    include_once ("global/produto.php"); 
    
        if(isset($_POST["nome"]) and isset($_POST["valor"]) and isset($_POST["qtd"]) and isset($_POST["validade"]) and isset($_POST["editar"])){
               
            editar($_POST["nome"], $_POST["valor"], $_POST["qtd"], $_POST["validade"], $_POST["editar"]);
        }
    ?>
<table id="center">
    <tr>
        <td>nome</td>
        <td>valor</td>
        <td>qtd</td>
        <td>validade</td>
        <td></td>
    </tr>
</table>
    <?php
    if(isset($_GET["editar"])){
        editar2($_GET["editar"]);
    }
    ?>
<?php include_once ("global/footer.php"); ?>