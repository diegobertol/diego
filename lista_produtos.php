<?php 
        include_once ("global/global.php"); 
        include_once ("global/header.php"); 
        include_once ("global/produto.php"); 
        
        if(isset($_POST["id"])){
                $id = $_POST["id"];
                delete($id);
        }

        ver();
?>
<?php include_once ("global/footer.php"); ?>
