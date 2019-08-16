<?php 
    $mysqli = new mysqli('localhost', 'root', '', 'lead') or die (mysqli_error($mysqli));

    if(isset($_POST['save'])){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $plataforma = $_POST['plataforma'];
        $data = $_POST['data'];
        $mensagem = $_POST['mensagem'];
        $empreendimento = $_POST['empreendimento'];
        $data = $_POST['data'];
        $mysqli -> query("INSERT INTO lead (nome,telefone,email,plataforma,data,mensagem,empreendimento) VALUES('$nome', '$telefone','$email','$plataforma', '$data' , '$mensagem', '$empreendimento')") or die($mysqli ->error);
    }


?>