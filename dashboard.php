<!DOCTYPE html>
<html lang="en">
<?php
require_once('src/dao/ObjetoDAO.php');

session_start();

if (!(isset($_SESSION['usuario']))) {
    header('Location: index.php');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style-internal.css">
    <title>RepoEdu</title>
</head>

<body>
    <div class="container-dash">
        <div class="barra-nav-top">
            <div class="logo">
                <img style="" src="./images/logo-livro.png"><span style="margin-left: -10px;font-weight: bold">RepoEdu</span>
            </div>

            <div class="area-links">
                <ul>
                    <li><a href="">Início</a></li>
                    <li><a href="">Submeter OA's</a></li>
                    <li><a href="">Meus OA's</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </div>

        </div>

        <div class="boas-vindas">
            <h2>Olá <?= $_SESSION['usuario'][1] ?>! </h2>
        </div>

        <div class="area-pesquisa">
            <span class="titulo-principal-pesquisa">Pesquise aqui!</span><br>
            <span class="titulo-secundario-pesquisa">Pesquise aqui seu objeto de aprendizagem!</span><br>

            <br>
            <div class="pesquisa">
                <form>
                    <input name="pesquisa" class="input-pesquisa" placeholder="Ex.: Jogo digital de matemática">
                    <input name="pesquisar" type="submit" value="Pesquisar" class="botao-pesquisa">
                </form>
            </div><br>
            <div class="pesquisa-avancada">
                Pesquisa avançada em breve
            </div>
        </div>
        <div class="area-novidades">

            <div class="novidade">
                <h2>Meus objetos publicados</h2>
            </div>
            <?php
            $objetoDAO = new ObjetoDAO();

            $objetos = $objetoDAO->listarPorUsuarioId($_SESSION['usuario'][0]);

            if (empty($objetos)) {
                print("Ainda não existe um objeto publicado por você :(");
            } else {
                foreach ($objetos as $objeto) :
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
                            <span>Enviado por <?= $objeto[13] . ' ' . $objeto[14] ?></span> -
                            <span><a href="<?= $objeto[8] ?>">Fazer download</a></span>
                        </div>
                    </div>
            <?php endforeach;
            } ?>
        </div>
    </div>
</body>

</html>