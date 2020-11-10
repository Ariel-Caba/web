function registrarcursos(){
    if( document.getElementById("curso").value==""){
        document.getElementById("small_nombre").innerHTML ="Ingrese el nombre del curso";
    }else
        {
        document.getElementById("small_nombre").innerHTML ="";
            var datos = {
                nombre:document.getElementById("curso").value,
                descriptcion: document.getElementById("descripcion").value
            };

            var xmlhttp = new XMLHttpRequest();

            xmlhttp.open("POST","../data/insertcurso.php",true);
            xmlhttp.setRequestHeader("Content-type","application/json");
            xmlhttp.send(JSON.stringify(datos));
            alert("registrado correctamente");
            document.getElementById("curso").value="";
            document.getElementById("descripcion").value="";
    }
}


