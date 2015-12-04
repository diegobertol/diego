<?php



function cadastrou($nome, $email, $senha){
    $sql = "INSERT INTO `login`(`nome`, `email`, `senha`) VALUES (:nome, :email, :senha);";
    $prepare = conexao()->prepare($sql);
    $prepare->bindValue(":nome", $nome );
    $prepare->bindValue(":email", $email );
    $prepare->bindValue(":senha", $senha );
    $prepare->execute();
    
    }
    function estaLogado(){
        if(isset($_SESSION ['login'])){
            return true;
        }else{
            return false;
        }
            
    }
    function login(){
        if(
        isset($_POST['email']) and
        isset($_POST['senha'])
    ){
    $sql = "SELECT * FROM `login` WHERE `email`=:email and `senha`=:senha;";
    $prepare = conexao()->prepare($sql);
    $prepare->bindValue(":email", $_POST['email']);
    $prepare->bindValue(":senha", $_POST['senha']);
    $prepare->execute();

    if($prepare->rowCount() == 1){
        $_SESSION ['login'] = $prepare->fetch(PDO::FETCH_ASSOC);
        header("Location: cadastro_produtos.php");
    }else {
        return "Deu errado!";
    }
    }
    }

    return "Login ou senha inválidos!";

?>

