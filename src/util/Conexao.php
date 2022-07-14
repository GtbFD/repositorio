<?php

class Conexao
{

    public function obterConexao()
    {
        return new PDO("mysql:host=localhost;dbname=repositorio", 'root', '');
    }

}