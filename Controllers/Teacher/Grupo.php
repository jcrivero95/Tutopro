<?php


namespace Controller\Teacher;

require_once REPOSITORY . 'Teacher/TeacherRepository.php';
require_once CONTROLLER . 'Validator/validator.php';
require_once PROJECT . 'Helpers/Response.php';

use Repository\Teacher\TeacherRepository;
use Repository\Validator\ValidatorRepository;
use Helpers\Response;



class Grupo
{

    protected $repo;
    protected $validate;

    public function __construct()
    {
        $this->repo = new TeacherRepository();
        $this->validate = new ValidatorRepository();
    }

    /**
     * @return TeacherRepository
     */
    public function save($nombre, $codigo, $periodo, $idProfesor, $asignatura)
    {
        $validateCodigo = $this->validate->getCodigo($codigo);
        if(!$validateCodigo) {
            return $this->repo->crearGrupo($nombre, $codigo, $periodo, $idProfesor, $asignatura);
        }
        return header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    public function update($nombre, $codigo, $periodo, $idProfesor, $asignatura, $idGrupo)
    {
        return $this->repo->updtadeGrupo($nombre, $codigo, $periodo, $idProfesor, $asignatura, $idGrupo);


    }



}