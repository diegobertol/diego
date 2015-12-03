<?php

function cadastro($nome, $valor, $qtd, $dt_val){
    $sql = "INSERT INTO `cadastro`(`nome`, `valor`, `qtd`, `validade`) VALUES (:nome,:valor,:qtd,:validade);";
    $prepare = conexao()->prepare($sql);
    $prepare->bindValue(":nome", $nome );
    $prepare->bindValue(":valor", $valor );
    $prepare->bindValue(":qtd", $qtd);
    $prepare->bindValue(":validade", $dt_val );
    $prepare->execute();

    $sqlh = "INSERT INTO `historico`(`nome`, `valor`, `qtd`, `validade`) VALUES (:nome,:valor,:qtd,:validade);";
    $prepare = conexao()->prepare($sqlh);
    $prepare->bindValue(":nome", $nome );
    $prepare->bindValue(":valor", $valor );
    $prepare->bindValue(":qtd", $qtd);
    $prepare->bindValue(":validade", $dt_val );
    $prepare->execute();
}

function ver(){
    $sql = "SELECT * FROM `cadastro`;";
    $prepare = conexao()->prepare($sql);
    $prepare->execute();
    while ($linha = $prepare->fetch(PDO::FETCH_ASSOC)){
        ?>
    <table id="center">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Valor</td>
                <td>Quantidade</td>
                <td>Data de Validade</td>
            </tr>
            <tr>
                <td><?php echo $linha["idcadastro"]; ?></td>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["valor"]; ?></td>
                <td><?php echo $linha["qtd"]; ?></td>
                <td><?php echo $linha["validade"]; ?></td>
                <td>
                    <form method="post">
                        <input type="submit" class="tiny button botao" value="excluir" />
                        <input type="hidden" name="id" value="<?php echo $linha["idcadastro"]; ?>" />
                    </form>
                </td>
                <td>
                    <form action="editar.php" method="GET">
                        <input type="submit" class="tiny button botao" value="editar" />
                        <input type="hidden" name="editar" value="<?php echo $linha["idcadastro"]; ?>" />
                    </form>
                </td>
            </tr>
    </table>
        <?php
        }
    }
    function delete($id) {
        $sql= "DELETE FROM `cadastro` WHERE idcadastro=:id;";
        $prepare = conexao()->prepare($sql);
        $prepare->bindValue(":id", $id);
        $prepare->execute();
    }
function editar($nome, $valor, $qtd, $validade, $id) {
   
    $sql = "UPDATE `cadastro` SET `nome`=:nome,`valor`=:valor,`qtd`=:qtd,`validade`=:validade WHERE `idcadastro`=:id;";
    $prepare = conexao() ->prepare($sql);
    $prepare->bindValue(":nome", $nome);
    $prepare->bindValue(":valor", $valor);
    $prepare->bindValue(":qtd", $qtd);
    $prepare->bindValue(":validade", $validade);
    $prepare->bindValue(":id", $id);
    $prepare->execute();
     header("Location: lista_produtos.php");
}
function editar2($id) {
    $sql = "SELECT `idcadastro`, `nome`, `valor`, `qtd`, `validade` FROM `cadastro` WHERE `idcadastro`=:id;";
    $prepare = conexao() ->prepare($sql);
    $prepare->bindValue(":id", $id);
        $prepare->execute();
        while ($linha = $prepare->fetch(PDO::FETCH_ASSOC)){
        ?>
<form method="POST" >
    <table id="center">
        
            <tr>
                <td><input type="text" name="nome" value="<?php echo $linha["nome"]; ?>" /></td>
                <td><input type="text" name="valor" value="<?php echo $linha["valor"]; ?>" /></td>
                <td><input type="text" name="qtd" value="<?php echo $linha["qtd"]; ?>" /></td>
                <td><input type="text" name="validade" value="<?php echo $linha["validade"]; ?>" /></td>
                <td>
                    
                        <input type="submit" value="Finalizar" />
                        <input type="hidden" name="editar" value="<?php echo $linha["idcadastro"]; ?>"/>
                </td>
            </tr>

    </table>
    </form>
        <?php
        }
}