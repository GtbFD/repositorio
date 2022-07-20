<?php

require_once('src/model/Usuario.php');
require_once('src/dao/UsuarioDAO.php');

class Login
{

    private $usuarioDAO;

    public function entrar(Usuario $usuario)
    {
        $usuarioAutorizado = new UsuarioDAO();

        if($usuarioAutorizado->login($usuario))
        {
            return array(
                'status' => true,
                'usuario' => $usuarioAutorizado
            );
        }
        else{
            return array(
                'status' => false,
                'usuario' => null
            );
        }
    }
}