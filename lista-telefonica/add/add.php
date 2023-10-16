<?php
//aqui é a parte da lista telefonica
$_SESSION['id'];
error_reporting(E_ALL);
include('protect.php');
include('pessoa.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link rel="stylesheet" href="/add/add.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php
    include("../navbar/index.php");
    ?>
<section id="direita">
        <form action="" method="post">
            <h3><?php if (isset($res)) {
                echo "Editar contato";
            } else {
                echo "Cadastrar contatos";
            }?></h3>

    <a class="btn btn-primary" href="/main.php" role="button">Voltar</a>

            <label for="nome">NOME <span>*</span></label>
            <input type="text" name="nome" id="nome" value="<?php if (isset($res)) {
                echo $res['nome'];
            }
            ?>">

            <label for="telefone">TELEFONE <span>*</span></label>
            <input type="number" name="telefone" id="telefone" value="<?php if (isset($res)) {
                echo $res['telefone'];
            }
            ?>">

            <label for="email">EMAIL <span>*</span></label>
            <input type="email" name="email" id="email" value="<?php if (isset($res)) {
                echo $res['email'];
            }
            ?>">

            <input class="botao1" type="submit" value="<?php if (isset($res)) {
                echo "Atualizar";
            } else {
                echo "Cadastrar";
            }
            ?>">
            <?php
            

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
if (!empty($nome) && !empty($telefone) && !empty($email)) {

    //cadastrar
    if ($p->cadastarPessoa($nome, $telefone, $email)) {
        ?>
        <div class="aviso" >
            <h4>Cadastrado com succeso !!</h4>
        </div> 
        <?php
echo" iniciou";
    }

} else {
    ?>
    <div class="alerta" >
        <h4>Preencha todos os campos</h4>
    </div> 
    <?php
    
}

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
if (!empty($nome) && !empty($telefone) && !empty($email)) {

//cadastrar
if ($p->cadastarPessoa($nome, $telefone, $email)) {
    header("location: /add.php");
}

}

?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
