function guardarCombinacion(){
    let num1 = document.getElementById("1g").value;
    let num2 = document.getElementById("2g").value;
    let num3 = document.getElementById("3g").value;
    let num4 = document.getElementById("4g").value;

    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open("POST", "consulta1b.php",true);
    xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState == 4){
            console.log("Respuesta recibida!");
            if (xmlHttp.status==200){
            
            let respuestaJSON = JSON.parse(xmlHttp.responseText);
            console.log("1 "+respuestaJSON);
            console.log("num1 "+respuestaJSON.num1);
            console.log("num2 "+respuestaJSON.num2);
            console.log("num3 "+respuestaJSON.num3);
            console.log("num4 "+respuestaJSON.num4);

            
            //let resultado = respuestaJSON.getElementsByTagName("num1").item(0);

            //console.log(resultado);
            document.getElementById("1c").value =respuestaJSON.num1;
            document.getElementById("2c").value =respuestaJSON.num2;
            document.getElementById("3c").value =respuestaJSON.num3;
            document.getElementById("4c").value =respuestaJSON.num4;


        }else{
            console.log("Recurso no encontrado");
        }

    }
}
    xmlHttp.send("num1="+num1+"&num2="+num2+"&num3="+num3+"&num4="+num4);


}