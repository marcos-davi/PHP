function getClientes() {


    //Declarar el objeto XMLHttpRequest
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open("POST", "respuesta.php", true);
    //Establecer el HEADER de la petición
    xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    //asignar una función encargada de gestionar cada cambio
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            console.log("respuesta recibida!");
            if (xmlHttp.status == 200) {
               //obtenemos el array clientes  en nomenclatura JSON
                let textoRespuesta = xmlHttp.responseText;
               
                //la transformamos a array parseando el JSON
                let arrayClientes = JSON.parse(textoRespuesta);
               
                
                document.getElementById("clientes").innerHTML ="";
                //recorremos el array de clientes para mstralos
                for(let k=0;k<arrayClientes.length;k++){
                    document.getElementById("clientes").innerHTML +=
                    "<li>"+ arrayClientes[k]+"</li>";
                }

            }
        }
    }
    xmlHttp.send(); //en este caso no enviamos ningun  parametro
}
