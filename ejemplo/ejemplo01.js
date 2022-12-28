function enviaPeticionGetXMLHttp(){
    let nombre1 = document.getElementById("nombre").value;
    let peticion = new XMLHttpRequest();
    peticion.open("GET", "ejemplo01.php?nombre1="+nombre1+"&nombre2=Mac&edad=22", true);
    peticion.onreadystatechange = function(){
        if(peticion.readyState==4){ //un 4 es que he obtenido respuesta
            console.log("He obtenido respuesta");
            if(peticion.status==200){
                console.log("El recurso existe");
              //  let respuesta = peticion.responseText;
                let respuestaXML = peticion.responseXML;
                console.log(respuestaXML.firstElementChild);
                console.log(respuestaXML.firstElementChild.children[0]);
                 let primerNombre = respuestaXML.firstElementChild.children[0];
                 let segundoNombre = respuestaXML.firstElementChild.children[1];
             
                document.getElementById("respuestas").innerHTML=`
                El primer nombre es:`+primerNombre.innerHTML+` <br />
                El segundo nombre es:`+segundoNombre.textContent;
            }else{
                console.log("El recurso no existe");
            }
        }
    }

    peticion.send();
}