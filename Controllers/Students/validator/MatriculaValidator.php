<?php


namespace Controllers\validator;

require_once REPOSITORY . 'Student/StudentRepository.php';

use Repository\Student\StudentRepository;


class MatriculaValidator
{
    public static function validateMatricula($idEstudiante, $idGrupo)
    {
        $validate = (new StudentRepository())->validateMatricula($idEstudiante, $idGrupo);
        if (count($validate) > 0) {
            return ['Ya te encuentras matriculado en este grupo'];
        }
    }

}