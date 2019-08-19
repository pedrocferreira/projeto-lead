<?php 

    session_start();
    $mysqli = new mysqli('localhost', 'root', '', 'lead') or die (mysqli_error($mysqli));

    if(isset($_POST['save'])){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $plataforma = $_POST['plataforma'];
        $data = $_POST['data'];
        $mensagem = $_POST['mensagem'];
        $empreendimento = $_POST['empreendimento'];
      
        $mysqli -> query("INSERT INTO lead (nome,telefone,email,plataforma,data,mensagem,empreendimento) VALUES('$nome', '$telefone','$email','$plataforma', '$data' , '$mensagem', '$empreendimento')") or die($mysqli ->error);

        $_SESSION['message'] = "Lead Salvo com Sucesso!";
        $_SESSION['msg_type'] = "success";

        header("location: index.php");

    }



    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli -> query("DELETE FROM lead WHERE id =$id") or die ($mysqli ->error());

        $_SESSION['message'] = "Lead Deletado!";
        $_SESSION['msg_type'] = "danger";
        header("location: index.php");
    }


?>