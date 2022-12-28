 function generaNumero(){
    let configFetch = {
        method: "GET",
     // no tiene body pal ser del tipo GET
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    };
    let promesa = fetch("generaNumero.php", configFetch);
    promesa.then(function (response) {
        //la propiedad ok retorna true si se ha realizado correctamente
        if (response.ok) {
            console.log("REspuesta OK");
        }
        response.json().then(
            function (objetoJSON) {
                let respuesta = objetoJSON.info;
                //mostramos la respuesta enel HTML
                document.getElementById("respuesta").innerHTML = respuesta;
            });
    }).catch(function (error) {
        console.log('Error con la petición:' + error.message);
    });
}

function checkNumero() {
    //obtenemos los valores a enviar al servidor
    let numero = document.getElementById("numero").value;
    
    //fetch retorna un obeto del tipo Promise. 

    let configFetch = {
        method: "POST",
     body: "numero=" + numero,
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    };
    let promesa = fetch("checkNumero.php", configFetch);
    promesa.then(function (response) {
        //la propiedad ok retorna true si se ha realizado correctamente
        if (response.ok) {
            console.log("REspuesta OK");
        }
        response.json().then(
            function (objetoJSON) {
                let respuesta = objetoJSON.info;
                //mostramos la respuesta en el HTML
                document.getElementById("respuesta").innerHTML = respuesta;
            });
    }).catch(function (error) {
        console.log('Error con la petición:' + error.message);
    });
}
