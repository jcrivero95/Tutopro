<?php


namespace Repository\Student;

require_once INFRASTRUCTURE . 'BaseRepository.php';
require_once PROJECT . 'Helpers/Response.php';

use BaseRepository;
use Helpers\Response;


class StudentRepository extends BaseRepository
{
    public function saveStudent($nombre, $apellidos, $tipo_id, $numero_id, $email, $telefono, $pass, $rol)
    {
        $sql = "insert into usuarios(nombre, apellido, tipo_id, numero_id, email, telefono, password, rol) values (?,?,?,?,?,?,?,?)";

        $this->execute($sql, 'sssssssi', [$nombre, $apellidos, $tipo_id, $numero_id, $email, $telefono, $pass, $rol]);

        return Response::response('Registro exitoso', null, true);


    }

    public function saveMatricula($idGrupo, $idEstudiante)
    {
        $sql = "insert into matricula(idGrupo, idEstudiante ) values (?,?)";

        $this->execute($sql, 'ii', [$idGrupo, $idEstudiante]);

        return Response::response('Matriculado correctamente', null, true);


    }

    public function agendarCita($nombre, $matricula, $fecha, $descripcion)
    {
        $sql = "insert into citas(nombre, idMatricula, fecha, solicitud) values (?,?,?,?)";

        $this->execute($sql, 'siss', [$nombre, $matricula, $fecha, $descripcion]);

        return Response::response('Cita agendada correctamente', null, true);


    }

    public function validateMatricula($idEstudiante, $idGrupo)
    {
        $sql = "select * from matricula m 
                inner join grupo g on g.id = m.idGrupo 
                inner join usuarios u on u.id = m.idEstudiante 
                where m.idEstudiante = ? and m.idGrupo = ?";

        return $this->query($sql, 'ii', [$idEstudiante, $idGrupo]);
    }

}