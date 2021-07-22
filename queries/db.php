<?php

function con()
{
    return new mysqli("localhost", "root", "", "tutopro");
}


function get_teacher()
{
    $repo = array();
    $con = con();
    $query = $con->query("select * from usuarios where rol = 3");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function get_student()
{
    $repo = array();
    $con = con();
    $query = $con->query("select * from usuarios where rol = 2");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function get_grupos($codigo)
{
    $repo = array();
    $con = con();
    $query = $con->query("select g.nombre, g.id, g.codigo, g.periodo, g.estado, a.nombre as asignatura from grupo g
inner join asignatura a on a.id = g.idAsignatura where g.codigo = '$codigo'");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function showEvents($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select c.creada_en as fechaInicio, c.fecha as fechaFin, c.nombre as nombreEvento, c.id from citas c 
                        inner join matricula m on m.id = c.idMatricula 
                        inner join usuarios u on u.id = m.idEstudiante 
                        where m.idEstudiante = $id and c.estado = 'procesada';");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function countTeacher()
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(u.nombre) as profesores from usuarios u where u.rol = 3");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function countEstudantes()
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(u.nombre) as profesores from usuarios u where u.rol = 2");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function countGrupos($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(g.nombre) as countgrupos from grupo g where g.idProfesor = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function countAsignatura($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(g.id) as countasignatura from asignatura g where g.user_id = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function countCitasPendientes($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(c.id) as countaCitaP from citas c 
inner join matricula m on m.id = c.idMatricula 
inner join grupo g on g.id = m.idGrupo 
inner join usuarios u on u.id = g.idProfesor 
where c.estado = 'pendiente' and g.idProfesor = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function countCitasProcesada($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(c.id) as countaCitas from citas c 
inner join matricula m on m.id = c.idMatricula 
inner join grupo g on g.id = m.idGrupo 
inner join usuarios u on u.id = g.idProfesor 
where c.estado = 'procesada' and g.idProfesor = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function totalCitasEstudent($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(c.id) as countCitas from citas c 
inner join matricula m on m.id = c.idMatricula 
where m.idEstudiante = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function citasPendenteEstudent($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(c.id) as countCitas from citas c 
inner join matricula m on m.id = c.idMatricula 
where m.idEstudiante = $id and c.estado = 'pendiente'");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function CitasProgramadaseEstudent($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select count(c.id) as countCitas from citas c 
inner join matricula m on m.id = c.idMatricula 
where m.idEstudiante = $id and c.estado = 'procesada'");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function showEventsTeacher($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select c.creada_en as fechaInicio, c.fecha as fechaFin, c.nombre as nombreEvento, c.id from citas c 
                        inner join matricula m on m.id = c.idMatricula 
                        inner join usuarios u on u.id = m.idEstudiante 
                        where c.procesado_por = $id and c.estado = 'procesada';");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function update_archivo($folder, $archivo, $user_id)
{
    $con = con();
    $con->query("update archivo a set a.folder = '$folder', a.nombre = '$archivo', a.estado = 1  where a.id_user = $user_id");
}

function cargarContenido($idCita, $nombre, $url, $descripcion, $file){
    $con = con();

    $con->query("insert into contenido(idCita, nombre, url, descripcion, file) values (\"$idCita\", \"$nombre\", \"$url\", \"$descripcion\", \"$file\")");
}



function get_asignatura($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select * from asignatura a where a.user_id = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function get_grupo($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select g.nombre, g.id, g.codigo, g.periodo, g.estado, a.nombre as asignatura from grupo g
inner join asignatura a on a.id = g.idAsignatura  where g.idProfesor = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function get_edtitgrupo($idUser, $idAsignatura, $idGrupo)
{
    $repo = array();
    $con = con();
    $query = $con->query("select g.nombre, a.id as idAsignatura, g.id, g.codigo, g.periodo, g.estado, a.nombre as nombreAsignatura from grupo g
inner join asignatura a on a.id = g.idAsignatura  where g.idProfesor = $idUser and a.id = $idAsignatura and g.id = $idGrupo");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}


function get_AllCitas($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select * from citas c where c.id = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function getUsuariosEstudents($email)
{
    $repo = array();
    $con = con();
    $query = $con->query("select * from usuarios u left join estudiante e on e.email = u.email where u.email = '$email'; ");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function getGrupos($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select m.id, a.nombre as nombreAsignatura, g.nombre as nombreGrupo from matricula m 
inner join grupo g on m.idGrupo = g.id
inner join asignatura a on a.id = g.idAsignatura    
inner join usuarios u on u.id = m.idEstudiante where m.idEstudiante = $id");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function getCitas($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select c.nombre as nombreCita, a.nombre as nombreAsignatura, g.nombre as nombreGrupo, c.estado, c.respuesta, c.fecha from citas c 
inner join matricula m ON m.id = c.idMatricula 
inner join grupo g on g.id = m.idGrupo 
inner join asignatura a on a.id = g.idAsignatura 
inner join usuarios u on u.id = m.idEstudiante where u.id = $id and c.estado = 'pendiente'");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function getProcesadas($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select distinct c.nombre as nombreCita, a.nombre as nombreAsignatura, c.estado, c.respuesta, c.fecha, c2.nombre, c2.url, c2.descripcion, c2.file from citas c 
inner join matricula m ON m.id = c.idMatricula 
inner join grupo g on g.id = m.idGrupo 
inner join asignatura a on a.id = g.idAsignatura
inner join usuarios u on u.id = m.idEstudiante 
inner join contenido c2 on c2.idCita = c.id 
where u.id = $id and c.estado = 'procesada'");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function getCitasTeacher($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select c.nombre as nombreCita, a.nombre as nombreAsignatura, g.nombre as nombreGrupo, c.id, u.nombre as estudiante, u.apellido, c.estado, c.respuesta, c.fecha, c.solicitud from citas c 
inner join matricula m ON m.id = c.idMatricula 
inner join grupo g on g.id = m.idGrupo 
inner join asignatura a on a.id = g.idAsignatura
inner join usuarios u on u.id = m.idEstudiante where g.idProfesor = $id and c.estado= 'pendiente'");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}

function getCitasProgramadas($id)
{
    $repo = array();
    $con = con();
    $query = $con->query("select c.nombre as nombreCita, a.nombre as nombreAsignatura, c.id, u.nombre as estudiante, u.apellido, c.estado, c.respuesta, c.fecha, c.solicitud from citas c 
inner join matricula m ON m.id = c.idMatricula 
inner join grupo g on g.id = m.idGrupo 
inner join asignatura a on a.id = g.idAsignatura
inner join usuarios u on u.id = m.idEstudiante where g.idProfesor = $id and c.estado= 'procesada'");
    while ($r = $query->fetch_object()) {
        $repo[] = $r;
    }
    return $repo;
}


?>
