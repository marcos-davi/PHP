function sendNumeroAjaxXML() {
    //obtenemos los valores a enviar al servidor
    let num1 = document.getElementById("numero").value;
    

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
                //obtenemos la respuesta y extraemos el XML
                let respuestaXML = xmlHttp.responseXML;
                //extraemos la respuesta moviéndonos por el DOM
                let resultado = respuestaXML.firstElementChild.firstElementChild.innerHTML;
//mostramos la respuesta en el HTML
                document.getElementById("respuesta")
                    .innerHTML = resultado;
            }
        }
    }
    xmlHttp.send("n1=" + num1 );    //enviar la petición con parámetros
}
