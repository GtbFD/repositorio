<!DOCTYPE html>
<html lang="en">

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
                <img style="" src="./images/logo-livro.png"><span style="margin-left: -10px;font-weight: bold">RepoEdu</span>
            </div>

            <div class="area-links">
                <ul>
                    <li><a href="">Início</a></li>
                    <li><a href="">Submissão</a></li>
                    <li><a href="">Registro</a></li>
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
                <form action="" method="post">
                    <input name="email" placeholder="Email"><br>
                    <input name="senha" type="password" placeholder="Senha"><br><br>
                    <a href="" style="text-decoration: none; color: black;">Esqueci minha senha</a><br>
                    <center><input style="border:1px solid #CCC;border-radius: 5px; padding: 10px;margin-top: 15px; width: 150px;" 
                    name="entrar" type="submit" value="Entrar"></center>
                    <b><center><br><?php ?><center></b>
                </form>
            </div>
        </div>

        <div class="area-novidades">
            <h2>Objetos de aprendizagem recentes!</h2>
            
            <div class="novidade">
                Que triste :( não temos nada para mostrar ainda!
            </div>
        </div>
    </div>
</body>

</html>