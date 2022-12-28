function getCliente() {
    //obtenemos los valores a enviar al servidor
    let numCliente = document.getElementById("numeroCliente").value;
    
    //fetch retorna un obeto del tipo Promise. 

    let configFetch = {
        method: "GET",
     // no tiene body pal ser del tipo GET
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    };
    let promesa = fetch("respuesta.php?"+"numCliente=" + numCliente, configFetch);
    promesa.then(function (response) {
        //la propiedad ok retorna true si se ha realizado correctamente
        if (response.ok) {
            console.log("REspuesta OK");
        }
        response.json().then(
            function (objetoJSON) {
                let respuesta = objetoJSON.nombre;

                //mostramos la respuesta enel HTML
                document.getElementById("cliente").innerHTML = respuesta;
            });
    }).catch(function (error) {
        console.log('Error con la petición:' + error.message);
    });
}
