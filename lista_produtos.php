<?php include_once ("template/global.php"); ?>
<?php include_once ("template/header.php"); ?>
<?php
    if(isset($_POST["id"])){
            $id = $_POST["id"];
            delete($id);
    }
    
    ver();
?>
<?php include_once ("template/footer.php"); ?>
