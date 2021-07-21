<?php


namespace Controller\Validator;

require_once REPOSITORY . 'RepoValidator/ValidatorRepository.php';

use Repository\Validator\ValidatorRepository;


class validator
{
    public static function validateCodigo($codigo){
        $validate = (new ValidatorRepository())->getCodigo($codigo);
        if(count($validate) > 0){
            return ['No se puede registrar este grupo con este codigo'];
        }
    }

}