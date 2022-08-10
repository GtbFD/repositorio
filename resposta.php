<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<?php
    require_once('src/model/Usuario.php');
    require_once('src/util/Login.php');

    require_once('src/dao/ObjetoDAO.php');

    $codigo = $_GET['codigo'];
    $mensagem = $_GET['mensagem'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style-resposta.css">
    <title>RepoEdu</title>
</head>

<script>
    setTimeout(() => {
        window.location.href="http://localhost/Repositorio/dashboard.php";
    }, 2000);
</script>

<body>
    <div class="container">
        <div class="aviso-principal">
            <center><img class="imagem" src="./images/megafone.png"></center>
            <div class="mensagem <?= $codigo ?> ">
                Mensagem: <b><?= $mensagem ?></b>
            </div>
            <meta http-equiv="refresh" content="3"; url="http://localhost/Repositorio/dashboard.php">
        </div>
    </div>
</body>

</html>