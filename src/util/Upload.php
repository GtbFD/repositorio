<?php

class Upload
{

    private $DIRETORIO_DE_UPLOAD = './objetos/';

    public function enviarArquivo()
    {
        $arquivoTemporario = $_FILES['userfile']['tmp_name'];
        $nome = $_FILES['userfile']['name'];
        $tamanho = $_FILES['userfile']['size'];
        $tipo = $_FILES['userfile']['type'];

        $nomeComprimido = explode('.', $nome);
        $extensao = strtolower(end($nomeComprimido));

        $nomeModificado = md5(time().$nome).'.'.$extensao;

        $diretorio = $this->DIRETORIO_DE_UPLOAD.$nomeModificado;

        if(move_uploaded_file($arquivoTemporario, $diretorio)){

            $dados = array(
                'url' => $diretorio,
                'formato' => $tipo
            );
            
            return $dados;
        }
        else{
            return false;
        }
    }
}