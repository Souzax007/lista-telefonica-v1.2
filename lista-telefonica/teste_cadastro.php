<?php
include("config.php");
try {
    // Dados a serem inseridos
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Consulta SQL para inserir os dados
    $sql = "INSERT INTO usuarios (nome,email, senha) VALUES (:nome,:email, :senha)";
    
    // Prepara a consulta
    $stmt = $pdo->prepare($sql);
    
    // Vincula os parâmetros com os valores
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    
    // Executa a consulta
    $stmt->execute();
    
    // Redireciona para a página index.php após a inserção bem-sucedida
    header("Location: index.php");
    exit(); // Certifique-se de sair do script após o redirecionamento para evitar execução adicional.

} catch (PDOException $e) {
    // Em caso de erro na conexão ou inserção, exibe a mensagem de erro
    echo "Erro na inserção de dados: " . $e->getMessage();
}
?>

