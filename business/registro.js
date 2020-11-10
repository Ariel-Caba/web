function registrardatos(){
    var contador = 0;

        var agregar_carnet ="";
        var tipoc ="0";
        if($('input:radio[name=Rpersona]:checked').val()=="Rprofesor"){
            var agregar_carnet ="20201";
            tipoc ="p";
        }
        if($('input:radio[name=Rpersona]:checked').val()=="Ralumno"){

            var agregar_carnet ="20202";
            tipoc ="a";
        }
        if($('input:radio[name=Rpersona]:checked').val()=="Rencargado"){
            tipoc ="e";
            var agregar_carnet ="20203";
        }
        var general = document.getElementById("carnet").value;

        if( document.getElementById("carnet").value.length != 4){
            document.getElementById("small_carnet").innerHTML ="Ingrese cuatro digitos del carnet";
            contador = contador +1;


        }else
            {
            document.getElementById("small_carnet").innerHTML ="";

        }

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
            tipo: tipoc,
            carnet: agregar_carnet+document.getElementById("carnet").value,
            nombre1: document.getElementById("nombre1").value,
            nombre2:document.getElementById("nombre2").value,
            apellido1:document.getElementById("apellido1").value,
            apellido2:document.getElementById("apellido2").value,
            telefono: document.getElementById("telefono").value,
            correo:document.getElementById("correo").value,
            contraseña:document.getElementById("contrasenia1").value,
            fnan:document.getElementById("anio").value+"-"+document.getElementById("mes").value+"-"+document.getElementById("dia").value
        };

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.open("POST","../data/insertarpersona.php",true);
        xmlhttp.setRequestHeader("Content-type","application/json");
        xmlhttp.send(JSON.stringify(datos));
        alert("registrado correctamente");
        document.getElementById("carnet").value ="";
        document.getElementById("nombre1").value="";
        document.getElementById("nombre2").value="";
        document.getElementById("apellido1").value="";
        document.getElementById("apellido2").value="";
        document.getElementById("telefono").value="";
        document.getElementById("correo").value="";
        document.getElementById("contrasenia1").value="";
        document.getElementById("contrasenia2").value="";
        document.getElementById("anio").value="";
        document.getElementById("mes").value="";
        document.getElementById("dia").value="";
    }


}


