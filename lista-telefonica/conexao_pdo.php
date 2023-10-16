<?php

//conexão da lista telefonica ao banco 

//--------------conexão do banco de dados----------------//

try {

    $pdo = new PDO("mysql:dbname=Pessoas;host=localhost","root","linuxville");
} catch (PDOException $e) {
    echo"Erro com banco de dados: ".$e ->getMessage();
}
catch(Exception $e){
    echo"Erro generico: ".$e ->getMessage();
}

//----------------SELECT--------------------//

$cmd = $pdo->prepare("SELECT * FROM login WHERE id = :id ");
$cmd ->bindValue(":id",2);
$cmd-> execute();
$resultados = $cmd ->fetch(PDO::FETCH_ASSOC);

//serve para exibir as informações de forma organizada 
foreach($resultados as $key => $value){
    echo $key.": ".$value."<br>";
}

