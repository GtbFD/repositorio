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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
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
            <span class="titulo-principal-pesquisa">Pesquise aqui!</span><br>
            <span class="titulo-secundario-pesquisa">Pesquise aqui seu objeto de aprendizagem!</span><br>

            <br><div class="pesquisa">
                <form>
                    <input name="pesquisa" class="input-pesquisa" placeholder="Ex.: Jogo digital de matemática">
                    <input name="pesquisar" type="submit" value="Pesquisar" class="botao-pesquisa">
                </form>
            </div><br>
            <div class="pesquisa-avancada">
                <!--Pesquisa avançada em breve-->
            </div>
        </div>

        <div class="login">
            <h2 style="margin-left: 30px;">Faça seu login!</h2>
            <div class="formulario-login">
                <form action="index.php" method="post">
                    <input name="email" placeholder="Email"><br>
                    <input name="senha" type="password" placeholder="Senha"><br><br>
                    <a href="" style="text-decoration: none; color: black;">Esqueci minha senha</a><br>
                    <center><input style="border:1px solid #CCC;border-radius: 5px; padding: 10px;margin-top: 15px; width: 150px;" 
                    name="entrar" type="submit" value="Entrar"></center>
                    <b><center><br><?php ?><center></b>
                    <?php

                        $usuario = new Usuario();

                        $email = filter_input(INPUT_POST, 'email');
                        $senha = filter_input(INPUT_POST, 'senha');
                        
                        $usuario->setEmail($email);
                        $usuario->setSenha($senha);

                        $login = new Login();

                        if(isset($_POST['entrar']))
                        {
                            $resposta = $login->entrar($usuario);

                            if($resposta['status'])
                            {
                                $_SESSION['usuario'] = $resposta['usuario'];
                                header('Location: dashboard.php');
                            }else{
                                header('Location: resposta.php?codigo=erro&mensagem=Email e/ou senha inválidos.');
                            }
                        }
                    ?>
                </form>
            </div>
        </div>

        <div class="area-novidades">
            <h2>Objetos de aprendizagem recentes!</h2>
            
            <div class="novidade">
                
                <?php
                    $objetoDAO = new ObjetoDAO();

                    $objetos = $objetoDAO->listarPorData(5);

                    foreach($objetos as $objeto):
                ?>
                    <div class="objeto">
                        <div class="titulo_objeto">
                            <span><?= $objeto[1] ?></span>
                        </div>
                        <div class="descricao_objeto">
                            <span><?= $objeto[2] ?></span>
                        </div>
                        <div class="img_objeto">
                            <img src="">
                        </div>
                        <div class="info_objeto">
                            <span>Enviado por <?= $objeto[13].' '.$objeto[14] ?></span> -
                            <span><a href="<?= $objeto[8] ?>">Fazer download</a></span>
                        </div>
                    </div>
                <!--Que triste :( não temos nada para mostrar ainda!-->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>