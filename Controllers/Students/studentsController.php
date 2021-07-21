<?php


namespace Controller\Students;
require_once REPOSITORY . 'Student/StudentRepository.php';
require_once CONTROLLER . 'Students/validator/MatriculaValidator.php';
require_once CONTROLLER . 'Usuario/validator/UsuarioValidator.php';
require_once PROJECT . 'Helpers/Response.php';

use Repository\Student\StudentRepository;
use Controllers\validator\MatriculaValidator;
use Controllers\validator\UsuarioValidator;
use Helpers\Response;

class studentsController
{
    protected $repo;
    protected $validate;

    public function __construct()
    {
        $this->repo = new StudentRepository();
        $this->validate = new MatriculaValidator();
    }

    public function saveStudent($nombre, $apellidos, $tipo_id, $numero_id, $email, $telefono, $pass, $rol)
    {
        $validate = (new UsuarioValidator())->validateEmail($email);
        if(!$validate){
            return $this->repo->saveStudent($nombre, $apellidos, $tipo_id, $numero_id, $email, $telefono, $pass, $rol);
        }
        return Response::response('Este email ya se encuentra registrado', null, true);
    }

    public function martricular($idGrupo, $idEstudiante)
    {
        $validate = $this->validate->validateMatricula($idEstudiante, $idGrupo);
        if(!$validate){
           return  $this->repo->saveMatricula($idGrupo, $idEstudiante);
        }
        return Response::response('Ya te encuentras matriculado en este grupo', null, true);
    }

    public function agendarCita($nombre, $matricula, $fecha, $descripcion)
    {
        return $this->repo->agendarCita($nombre, $matricula, $fecha, $descripcion);
    }

}