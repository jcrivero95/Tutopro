function post(url, data, callback = null) {

    $.ajax({
        url,
        data: 'data=' + encodeURIComponent(JSON.stringify(data)),
        type: 'post',
        dataType: "json",
        crossDomain: false,
        success: function (response) {
            message(response);
            if (callback && typeof callback === 'function') {
                callback(response);
            }
        },
        error: function (r) {
            message('Algo salió mal');
        },
        complete: () => {

        }
    });
}

function message(response = {}) {
    const {success = false, message = 'Algo salió mal'} = response;
    if (success) {
        alertify.success(message);
    } else {
        alertify.error(message);
    }

}

function saveTeacher() {
    var nombres = $('#nombre').val();
    var apellidos = $('#apellidos').val();
    var tipo_id = $('#tipo_id').val();
    var numero_id = $('#numero_id').val();
    var email = $('#email').val();
    var telefono = $('#telefono').val();
    var password = $('#password').val();
    var rol = 3

    const url = 'Endpoints/registerTeacher.php'

    if (nombres === "" || apellidos === "" || numero_id === "" || email === "" || telefono === "" || password === "") {
        alertify.error('Diligencie todos los campos');
        return null;
    }

    data = {
        nombres,
        apellidos,
        tipo_id,
        numero_id,
        email,
        telefono,
        password,
        rol

    }

    post(url, data);

}


function saveGrupo() {

    var idTeacher = $('#id').val();
    var nombre = $('#nombre').val();
    var codigo = $('#codigo').val();
    var periodo = $('#periodo').val();
    var asignatura = $('#asignatura').val();


    const url = 'saveGrupo.php'

    if (nombre === "" || codigo === "" || asignatura === "" || asignatura === null || periodo === "") {
        alertify.error('Digite todos los campos');
        return null;
    }

    data = {
        idTeacher,
        nombre,
        codigo,
        periodo,
        asignatura

    }

    post(url, data);

}

function saveAsignatura() {

    var idTeacher = $('#id').val();
    var nombre = $('#nombre').val();
    var codigo = $('#codigo').val();

    const url = 'saveAsignatura.php'

    if (nombre === "" || codigo === "") {
        alertify.error('Digite todos los campos');
        return null;
    }

    data = {
        nombre,
        codigo,
        idTeacher
    }

    post(url, data);

}

function saveStudent() {
    var nombres = $('#nombre').val();
    var apellidos = $('#apellido').val();
    var tipo_id = $('#tipo_id').val();
    var numero_id = $('#numero_id').val();
    var email = $('#email').val();
    var telefono = $('#telefono').val();
    var pass = $('#pass').val();
    var rol = 2;

    const url = 'estudiantes/Endpoints/registerStudent.php'

    if (nombres === "" || apellidos === "" || numero_id === "" || email === "" || telefono === "" || pass === "") {
        alertify.error('Diligencie todos los campos');
        return null;
    }

    data = {
        nombres,
        apellidos,
        tipo_id,
        numero_id,
        email,
        telefono,
        pass,
        rol

    }

    $.ajax({
        url,
        data: 'data=' + encodeURIComponent(JSON.stringify(data)),
        type: 'post',
        dataType: "json",
        crossDomain: false,
        success: function (response) {
            message(response);
            if (callback && typeof callback === 'function') {
                callback(response);
            }
        },
        error: function (r) {
            alertify.error('Algo salio mal');
        },
        complete: () => {

        }
    });

}


function buscarPorCodigo(){
    const codigo = document.getElementById('codigo_grupo').value;
    if(codigo === ""){
        alert("Tiene que escribir el codigo del grupo");
        return null;
    }
    $.ajax({
        url: "estudiantes/Endpoints/refrescarTabla.php",
        method: "POST",
        data: {
            "codigo": codigo
        },
        success: function (respuesta) {
            $("#Resultado_busqueda").attr("disabled", false);
            $("#Resultado_busqueda").html(respuesta);
        }
    })
}

function refescarTablaCitas(idStudent){

    $.ajax({
        url: "estudiantes/Endpoints/refrescarTablaCitas.php",
        method: "POST",
        data: {
            "id": idStudent
        },
        success: function (respuesta) {
            $("#tableCitasProcesos").attr("disabled", false);
            $("#tableCitasProcesos").html(respuesta);
        }
    })
}

function Matricular(idGrupo) {

    var idStudent = $('#idStudent').val();

    const url = 'estudiantes/Endpoints/saveMatricula.php'

    data = {
        idGrupo,
        idStudent,


    }

    post(url, data);

}

function agendarCita() {
    var idEstudiante = $('#idEstudiante').val();
    var nombreCita = $('#nombreCita').val();
    var matricula = $('#matricula').val();
    var fecha_cita = $('#fecha_cita').val();
    var descripcionCita = $('#descripcionCita').val();

    if(nombreCita === "" || fecha_cita === ""){
        alertify.error('Digite los campos de Nombre y Fecha');
        return null;
    }

    const url = 'estudiantes/Endpoints/agendarCitas.php'

    data = {
        nombreCita,
        matricula,
        fecha_cita,
        descripcionCita



    }

    post(url, data);
    setTimeout(refescarTablaCitas(idEstudiante),3000);

}

function showCitas(idCita){

    $.ajax({
        url: "estudiantes/Endpoints/showCitas.php",
        method: "POST",
        data: {
            "id": idCita
        },
        success: function (respuesta) {
            $("#RespuestaCitas").attr("disabled", false);
            $("#RespuestaCitas").html(respuesta);
        }
    })
}

function showCitasProcesadas(idCita){

    $.ajax({
        url: "estudiantes/Endpoints/contenidoCitas.php",
        method: "POST",
        data: {
            "id": idCita
        },
        success: function (respuesta) {
            $("#contenidoCitas").attr("disabled", false);
            $("#contenidoCitas").html(respuesta);
        }
    })
}

function saveContenido() {
    var idCita = $('#idCita').val();
    var nombreContenido = $('#nombreContenido').val();
    var link = $('#url').val();
    var descripcion = $('#descripcion').val();

    if(nombreContenido === "" || link === ""){
        alertify.error('Digite los campos de Nombre y Url');
        return null;
    }

    const url = 'profesores/Endpoints/aggContenido.php'

    data = {
        idCita,
        nombreContenido,
        link,
        descripcion

    }

    post(url, data);

}

function uploadHV() {
    var formData = new FormData();
    var file = $('#file')[0].files[0];
    var idCita = $('#idCita').val();
    var nombreContenido = $('#nombreContenido').val();
    var link = $('#url').val();
    var descripcion = $('#descripcion').val();
    formData.append('file', file);
    formData.append('idCita', idCita);
    formData.append('nombreContenido', nombreContenido);
    formData.append('link', link);
    formData.append('descripcion', descripcion);

    if(nombreContenido === "" || link === "" || nombreContenido === null || link === null || file === "" || file === undefined){
        alertify.error('Digite los campos para enviar el contenido');
        return null;
    }

    $.ajax({
        url: 'queries/cargarContenido.php',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            alertify.success('Contenido enviado');

        },
        error: function (r) {
            alertify.error('Archivo demasiado pesado');
        },
    });

    return false;
}

function saveRespuesta() {
    var idTeacher = $('#idTeacher').val();
    var idCita = $('#idCita').val();
    var respuesta = $('#respuesta').val();


    if(respuesta === "" ){
        alertify.error('Digite una respuesta');
        return null;
    }

    const url = 'profesores/Endpoints/aggRespuesta.php'

    data = {
        idTeacher,
        idCita,
        respuesta,


    }

    post(url, data);
    location.reload();


}

function rechazar() {
    var idTeacher = $('#idTeacher').val();
    var idCita = $('#idCita').val();

    if(respuesta === "" ){
        alertify.error('Digite una respuesta');
        return null;
    }

    const url = 'profesores/Endpoints/aggRespuesta.php'

    data = {
        idTeacher,
        idCita,
        respuesta,


    }

    post(url, data);
    location.reload();


}




