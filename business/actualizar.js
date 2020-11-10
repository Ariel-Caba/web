function act(carnet_usuario,tabla){
    var contador = 0;

    if( document.getElementById("nombre1").value==""|| document.getElementById("nombre2").value==""){
        document.getElementById("small_nombres").innerHTML ="Llene los campos";
        contador = contador +1;
    }else{
        document.getElementById("small_nombres").innerHTML ="";
    }

    if( document.getElementById("apellido1").value==""|| document.getElementById("apellido2").value==""){
        document.getElementById("small_appellidos").innerHTML ="Llene los campos";
        contador = contador +1;

    }else{
        document.getElementById("small_appellidos").innerHTML ="";

    }
    if( document.getElementById("telefono").value.length != 8){
        document.getElementById("small_telefono").innerHTML ="Ingrese el numero telefonico correctamente";
        contador = contador +1;

    }else{
        document.getElementById("small_telefono").innerHTML ="";
    }
    if( document.getElementById("contrasenia1").value ==""|| document.getElementById("contrasenia2").value==""){
        document.getElementById("small_contrasenia").innerHTML ="llene los campos de la contraseña";
        contador = contador +1;
    }else{
        document.getElementById("small_contrasenia").innerHTML ="";
        if( document.getElementById("contrasenia1").value != document.getElementById("contrasenia2").value){
            document.getElementById("small_contrasenia").innerHTML ="Las contraseñas no son iguales";
            contador = contador +1;
        }
    }
    if( document.getElementById("anio").value ==""|| document.getElementById("mes").value ==""||document.getElementById("dia").value ==""){
        document.getElementById("small_fecha").innerHTML ="llene todos los campos de fecha";
        contador = contador +1;
    }
    else
    {
        document.getElementById("small_fecha").innerHTML ="";
    }

    if (contador ==0){
        var datos = {
            tabla:tabla,
            carnet: carnet_usuario,
            nombre1: document.getElementById("nombre1").value,
            nombre2:document.getElementById("nombre2").value,
            apellido1:document.getElementById("apellido1").value,
            apellido2:document.getElementById("apellido2").value,
            telefono: document.getElementById("telefono").value,
            correo:document.getElementById("correo").value,
            contraseña:document.getElementById("contrasenia1").value,
            fnan:document.getElementById("anio").value+"-"+document.getElementById("mes").value+"-"+document.getElementById("dia").value
        };
        var opcion = confirm(datos.tabla + '\n'+datos.nombre1+ '\n'+datos.nombre2
            + '\n'+datos.apellido1+ '\n'+datos.apellido2+ '\n'+datos.telefono
            + '\n'+datos.correo+ '\n'+datos.fnan);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST","../dataactualizar/actualizar.php",true);
        xmlhttp.setRequestHeader("Content-type","application/json");
        xmlhttp.send(JSON.stringify(datos));
    }
}

function drop(carnet, tabla,nombre,apellido){
    var datos = {
        tabla:tabla,
        carnet: carnet
    };
    var opcion = confirm('El '+tabla+'\n'+'Carnet : '+carnet+'\n'+
        'Nombre : '+nombre+' '+apellido+'\n'+ 'Se eliminara permanentemente');
    if(opcion==true){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","../dataactualizar/eliminar.php",true);
    xmlhttp.setRequestHeader("Content-type","application/json");
    xmlhttp.send(JSON.stringify(datos));
    }
}
function act_cur(cod_curso){
    if( document.getElementById("curso").value==""){
        document.getElementById("small_nombre").innerHTML ="Ingrese el nuevo nombre del curso";
    }else
    {
        document.getElementById("small_nombre").innerHTML ="";
        var datos = {
            cod_curso:cod_curso,
            nombre:document.getElementById("curso").value,
            descriptcion: document.getElementById("descripcion").value
        };
        alert('actualizado correctamete');

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.open("POST","../dataactualizar/actualizar_curso.php",true);
        xmlhttp.setRequestHeader("Content-type","application/json");
        xmlhttp.send(JSON.stringify(datos));
    }
}
function drop_cur(cod_curso,nombre){
    var datos = {
        cod_curso:cod_curso
    };
    var opcion = confirm('El curso\nNombre : '+nombre+'\nSe eliminara permanentemente');
    if(opcion==true){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST","../dataactualizar/eliminar_curso.php",true);
        xmlhttp.setRequestHeader("Content-type","application/json");
        xmlhttp.send(JSON.stringify(datos));
    }
}

function act_nota(carnet,cod_curso){

    var nota1l=0;
    var nota2l=0;
    var nota3l=0;
    var nota4l=0;
    if(document.getElementById('nota1').value!=""){
        nota1l=document.getElementById('nota1').value;
    }
    if(document.getElementById('nota2').value!=""){
        nota2l=document.getElementById('nota2').value;
    }
    if(document.getElementById('nota3').value!=""){
        nota3l=document.getElementById('nota3').value;
    }
    if(document.getElementById('nota4').value!=""){
        nota4l=document.getElementById('nota4').value;
    }
    var datos = {
        carnet:carnet,
        cod_curso:cod_curso,
        nota1:nota1l,
        nota2:nota2l,
        nota3:nota3l,
        nota4:nota4l
    };
    alert("actualizado correctamente");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST","../dataactualizar/actualizar_notas.php",true);
        xmlhttp.setRequestHeader("Content-type","application/json");
        xmlhttp.send(JSON.stringify(datos));

}