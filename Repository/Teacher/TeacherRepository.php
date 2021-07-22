<?php


namespace Repository\Teacher;

require_once INFRASTRUCTURE . 'BaseRepository.php';
require_once PROJECT . 'Helpers/Response.php';

use BaseRepository;
use Helpers\Response;


class TeacherRepository extends BaseRepository
{

    public function saveTeacher($nombre, $apellido, $tipo_id, $numero_id, $email, $telefono, $password, $rol)
    {
        $sql = "insert into usuarios(nombre, apellido, tipo_id, numero_id, email, telefono, password, rol ) values (?, ?, ?, ?, ?, ?, ?, ?)";

        $this->execute($sql, 'sssssssi', [$nombre, $apellido, $tipo_id, $numero_id, $email, $telefono, $password, $rol]);
        return Response::response('Información Guardada', null, true);
    }

    public function crearUsuario($email, $password, $rol)
    {
        $sql = "insert into usuarios(email, password, rol) values (?,?,?)";

        $this->execute($sql, 'ssi', [$email, $password, $rol]);
        return Response::response('Usuario creado correctamente', null, true);

    }

    public function stateTeacher($id){
        $sql = "update profesores p set p.usuario = 'Con usuario' where p.id = ? ";

        return  $this->execute($sql, 'i', [$id]);

    }

    public function crearGrupo($nombre, $codigo, $periodo, $idProfesor, $asignatura)
    {
        $sql = "insert into grupo(nombre, codigo, periodo, idProfesor, idAsignatura) values (?,?,?,?,?)";

        $this->execute($sql, 'sssii', [$nombre, $codigo, $periodo, $idProfesor, $asignatura]);
        return Response::response('Grupo creado correctamente', null, true);

    }

    public function updtadeGrupo($nombre, $codigo, $periodo, $idProfesor, $asignatura, $idGrupo)
    {
        $sql = "update grupo g set g.nombre =?, g.codigo=?, g.periodo=?, g.idProfesor = ?, g.idAsignatura = ? where g.id =  $idGrupo";

        $this->execute($sql, 'sssii', [$nombre, $codigo, $periodo, $idProfesor, $asignatura]);
        return Response::response('Grupo Actualizado correctamente', null, true);

    }

    public function crearAsignatura($nombre, $codigo, $id)
    {
        $sql = "insert into asignatura(nombre, codigo, user_id) values (?,?,?)";

        $this->execute($sql, 'ssi', [$nombre, $codigo, $id]);
        return Response::response('Asignatura creada correctamente', null, true);

    }

    public function updateAsignatura($nombre, $codigo, $id)
    {
        $sql = "update asignatura a set a.nombre = ?, a.codigo = ? where a.id = ?";

        $this->execute($sql, 'ssi', [$nombre, $codigo, $id]);
        return Response::response('Asignatura actualizada correctamente', null, true);

    }


    public function saveRespuesta($idTeacher, $respuesta, $id){

        $sql = "update citas c set c.procesado_por = ?, c.estado = 'procesada', c.respuesta = ?  where c.id = ? ";

         $this->execute($sql, 'isi', [$idTeacher, $respuesta, $id]);

        return Response::response('Respuesta enviada correctamente', null, true);



    }

    public function rechazarCita($idTeacher, $id){

        $sql = "update citas c set c.procesado_por = ?, c.estado = 'rechazada' where c.id = ? ";

        $this->execute($sql, 'ii', [$idTeacher, $id]);

        return Response::response('Cita rechazada', null, true);



    }

    public function saveContenido($idCita, $nombre, $url, $descripcion)
    {
        $sql = "insert into contenido(idCita, nombre, url, descripcion) values (?,?,?,?)";

        $this->execute($sql, 'isss', [$idCita, $nombre, $url, $descripcion]);

        return Response::response('Contenido enviado con exito', null, true);

    }

    public function getCodigo($codigo){
        $sql = 'select * from grupo g where g.codigo = ? ';

        return $this->query($sql, 's', [$codigo]);
    }


}