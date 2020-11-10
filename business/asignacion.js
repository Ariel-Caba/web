function asignar(tabla){
    alert('id : ' + $id+'->'+$nombre);
}




function asig_curso_prof(cod_curso){
    var datos = {
        tabla: "profesor",
        carnet: document.getElementById("profesor_select").value,
        cod_curso: cod_curso
        };

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","../data/g_asignarcurso.php",true);
    xmlhttp.setRequestHeader("Content-type","application/json");
    xmlhttp.send(JSON.stringify(datos));
}

function desasig_curso_prof(cod_curso,carnet){

    var datos = {
        tabla: "profesor",
        carnet: carnet,
        cod_curso: cod_curso
    };

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","../data/g_desasignar.php",true);
    xmlhttp.setRequestHeader("Content-type","application/json");
    xmlhttp.send(JSON.stringify(datos));

}
function asig_curso_alum(cod_curso){
    var datos = {
        tabla: "alumno",
        carnet: document.getElementById("alumno_select").value,
        cod_curso: cod_curso
    };

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","../data/g_asignarcurso.php",true);
    xmlhttp.setRequestHeader("Content-type","application/json");
    xmlhttp.send(JSON.stringify(datos));
}

function desasig_curso_alum(cod_curso,carnet){

    var datos = {
        tabla: "alumno",
        carnet: carnet,
        cod_curso: cod_curso
    };

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","../data/g_desasignar.php",true);
    xmlhttp.setRequestHeader("Content-type","application/json");
    xmlhttp.send(JSON.stringify(datos));

}

function asig_alum_encar(carnet){
    var datos = {
        funcion: "asignar",
        carnetencar: document.getElementById("encargado_select").value,
        carnetalum: carnet
    };

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","../data/e_asig_desig.php",true);
    xmlhttp.setRequestHeader("Content-type","application/json");
    xmlhttp.send(JSON.stringify(datos));
}

function desasig_alum_encar(carnetencar,carnetalum){

    var datos = {
        funcion: "desasignar",
        carnetencar: carnetencar,
        carnetalum: carnetalum
    };

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","../data/e_asig_desig.php",true);
    xmlhttp.setRequestHeader("Content-type","application/json");
    xmlhttp.send(JSON.stringify(datos));

}

