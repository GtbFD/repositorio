<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<?php
    require_once('src/model/Usuario.php');
    require_once('src/util/Login.php');

    require_once('src/dao/ObjetoDAO.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style-internal.css">
    <title>RepoEdu</title>
</head>

<body>
    <div class="container">
        <div class="barra-nav-top">
            <div class="logo">
                <img src="./images/logo-livro.png"><span style="margin-left: -10px;font-weight: bold">RepoEdu</span>
            </div>

            <div class="area-links">
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="">Submissão</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="">Suporte</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div>

        </div>

        <div class="area-pesquisa">
            <span class="titulo-principal-pesquisa" style="padding: 10px;">Cadastro</span><br>
            <span class="titulo-secundario-pesquisa" style="padding: 10px;">Preencha o formulário e cadastre-se!</span><br>

            <br><div class="pesquisa"><br>
                <form action="processamento_cadastro.php" method="POST">
                    <center><input style="margin: 5px; border-radius: 5px; border: 1px solid #CCC" required name="nome" class="input-pesquisa" placeholder="Digite seu nome">
                    <input style="margin: 5px; border-radius: 5px; border: 1px solid #CCC" required name="sobrenome" class="input-pesquisa" placeholder="Digite seu sobrenome">
                    <input style="margin: 5px; border-radius: 5px; border: 1px solid #CCC" type="email" required name="email" class="input-pesquisa" placeholder="Ex.: jose@gmail.com">
                    <input style="margin: 5px; border-radius: 5px; border: 1px solid #CCC" required name="senha" type="password" class="input-pesquisa" placeholder="Digite sua senha"><center>
                    <br><input name="cadastrar" required type="submit" value="Cadastrar" class="botao-pesquisa"><br>
                <br>
                </center>
                </form>
            </div><br>
        </div>
    </div>
</body>

</html>