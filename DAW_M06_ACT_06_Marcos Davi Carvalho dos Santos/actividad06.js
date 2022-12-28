/* 1.	Crea un nuevo documento  HTML con el nombre “index.html y un nuevo JS con el nombre “actividad06.js”.  
Vincula el HTML con el CSS y el JavaScript.*/

/*
3.	Al clicar en el botón GUARDAR COMBINACION envía una petición al servidor con el API XMLHttpRequest 
pasando la combinación formada por los 4 números escritos en los inputs. 
*/
function guardarCombinacion() {
  let num1 = document.getElementById("1g").value;
  let num2 = document.getElementById("2g").value;
  let num3 = document.getElementById("3g").value;
  let num4 = document.getElementById("4g").value;

  let xmlHttp = new XMLHttpRequest();
  xmlHttp.open("POST", "guardarCombinacion.php", true);
  xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4) {
      console.log("Respuesta recibida!");
      if (xmlHttp.status == 200) {
        let respuestaText = xmlHttp.responseText;

        document.getElementById("respuesta").innerHTML = respuestaText;
      } else {
        console.log("Recurso no encontrado");
      }
    }
  };
  xmlHttp.send(
    "num1=" + num1 + "&num2=" + num2 + "&num3=" + num3 + "&num4=" + num4
  );
}

/*
4.	Escribir un valor en un input del apartado GUARDAR COMBINACION envía una petición al servidor con el 
API XMLHttpRequest pasando como mínimo el valor escrito. 
*/

function input1(id, pos) {
  let nums = document.getElementsByName("gc")[pos - 1].value;

  let xmlHttp = new XMLHttpRequest();
  xmlHttp.open("POST", "guardarCombinacion2.php", true);
  xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4) {
      console.log("Respuesta recibida!");
      if (xmlHttp.status == 200) {
        let respuestaText = xmlHttp.responseText;
       //let respuestaJSON = JSON.parse(respuestaText);

        document.getElementById(id + "1").innerHTML = respuestaText;
        //console.log(respuestaJSON);
        console.log(respuestaText);
      } else {
        console.log("Recurso no encontrado");
      }
    }
  };

  xmlHttp.send(
    "nums=" + nums + "&pos=" + pos
    //"num1=" + num1 + "&num2=" + num2 + "&num3=" + num3 + "&num4=" + num4
  );
}

function input2(id, pos) {
  let nums = document.getElementsByName("cc")[pos - 1].value;
  let configuracion = {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "nums=" + nums + "&pos=" + pos
  }
  let promise = fetch("checkCombinacion2.php", configuracion);
  promise.then(
    function (respuesta) {
      respuesta.text().then(
        function (objetoTEXT) {
          console.log(objetoTEXT);
          document.getElementById(id + "1").innerHTML = objetoTEXT;
        }
      );
    }
  );

}

/*
5.	Al clicar en el botón CHECK COMBINACION envía una petición al servidor con el API Fetch 
pasando la combinación formada por los 4 números escritos en los inputs. 
*/

function checkCombinacion() {

  let numChk1 = document.getElementById("1c").value;
  let numChk2 = document.getElementById("2c").value;
  let numChk3 = document.getElementById("3c").value;
  let numChk4 = document.getElementById("4c").value;
  let configuracion = {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "numChk1=" + numChk1 + "&numChk2=" + numChk2 + "&numChk3=" + numChk3 + "&numChk4=" + numChk4
  }
  let promise = fetch("checkCombinacion.php", configuracion);
  promise.then(
    function (respuesta) {
      respuesta.text().then(
        function (objetoTEXT) {
          console.log(objetoTEXT);
          document.getElementById("respuestaChk").innerHTML = objetoTEXT;

        }
      );
    }
  );


  /*
  let xmlHttp = new XMLHttpRequest();
  xmlHttp.open("POST", "checkCombinacion.php", true);
  xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4) {
      console.log("Respuesta recibida!");
      if (xmlHttp.status == 200) {
        let respuestaJSON = JSON.parse(xmlHttp.responseText);
        console.log("1 " + respuestaJSON);
        console.log("num1 " + respuestaJSON.num1);
        console.log("num2 " + respuestaJSON.num2);
        console.log("num3 " + respuestaJSON.num3);
        console.log("num4 " + respuestaJSON.num4);

       
        document.getElementById("1c").value = respuestaJSON.num1;
        document.getElementById("2c").value = respuestaJSON.num2;
        document.getElementById("3c").value = respuestaJSON.num3;
        document.getElementById("4c").value = respuestaJSON.num4;
      } else {
        console.log("Recurso no encontrado");
      }
    }
  };
  xmlHttp.send();
  */

}

/*
6.	Escribir un valor en un input del apartado GUARDAR COMBINACION envía una petición al servidor
 con el API Fetch pasando como mínimo el valor escrito. 
*/


