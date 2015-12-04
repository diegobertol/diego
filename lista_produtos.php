<?php 
        include_once ("global/global.php"); 
        include_once ("global/header.php"); 
        include_once ("global/produto.php"); 
        
        if(isset($_POST["id"])){
                $id = $_POST["id"];
                delete($id);
        }

        
?>
<form method="post">
    <input type="text" name="nome" placeholder="nome" />
    <input type="tel" name="valor" placeholder="valor" />
    <input type="submit" value="Procurar" />
    </form>
    <table border="1">
        <?php
        if(
             !isset($_POST['nome']) and
             !isset($_POST['valor'])
          ){
                ver();
             }else{
                 procurar();
     }
    ?> 
</table>
<?php include_once ("global/footer.php"); ?>
