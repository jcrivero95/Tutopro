<?php


namespace Controller\Teacher;

require_once REPOSITORY . 'Teacher/TeacherRepository.php';
require_once PROJECT . 'Helpers/Response.php';
require_once CONTROLLER . 'Usuario/validator/UsuarioValidator.php';

use Repository\Teacher\TeacherRepository;
use Controllers\validator\UsuarioValidator;
use Helpers\Response;


class registerTeacher
{

    protected $repo;
    protected $validate;

    public function __construct()
    {
        $this->repo = new TeacherRepository();
        $this->validate = new UsuarioValidator();
    }

    /**
     * @return TeacherRepository
     */
    public function save($nombre, $apellido, $tipo_id, $numero_id,$email, $telefono, $password, $rol)
    {
        $validateEmail = $this->validate->validateEmail($email);
        if(!$validateEmail) {
            return $this->repo->saveTeacher($nombre, $apellido, $tipo_id, $numero_id, $email, $telefono, $password, $rol);
        }
        return header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    public function saveUser($idTeacher, $email, $pass, $rol)
    {
        $this->repo->stateTeacher($idTeacher);
        return $this->repo->crearUsuario($email, $pass, $rol);
    }

    public function aggContenido($idCita, $nombre, $url, $descripcion){

        return $this->repo->saveContenido($idCita, $nombre, $url, $descripcion);
    }

    public function aggRespuesta($idTeacher, $estado, $respuesta, $idCita ){

       return $this->repo->saveRespuesta($idTeacher, $estado, $respuesta, $idCita);

    }

    public function rechazar($idTeacher, $idCita ){

        return $this->repo->rechazarCita($idTeacher, $idCita);

    }


}