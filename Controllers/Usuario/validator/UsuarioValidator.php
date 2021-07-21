<?php


namespace Controllers\validator;

require_once REPOSITORY . 'Usuario/UsuarioRepository.php';

use Repository\Usuario\UsuarioRepository;


class UsuarioValidator
{
    public static function validateEmail($email)
    {
        $validate = (new UsuarioRepository())->getUser($email);
        if (count($validate) > 0) {
            return ['Este Email ya se encuentra registrado'];
        }
    }

}