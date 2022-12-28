<?php
  $con = mysqli_connect("localhost", "root", "root", "googlemaps") or die("No se ha podido conectar con la base de datos.");
  $query = "SELECT * FROM Pokemon";
  $result = mysqli_query($con, $query);
?>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    
    <script type="text/javascript">
      let map;

      function initMap() {
        const myLatLng = { lat: 41.3879, lng: 2.16992 };
        map = new google.maps.Map(document.getElementById("map"), {
          center: myLatLng, 
          zoom: 12,
        });

        let misMarcadores = [];

        <?php
          while($pokemon = mysqli_fetch_array($result)){
            extract($pokemon);
            echo "misMarcadores.push(['".$nombre."', '".$descripcion."', ".$coordenadas."]);";
          }
        ?>

        const infowindow = new google.maps.InfoWindow();

        misMarcadores.forEach(([title, descripcion, position], i) => {
          const marker = new google.maps.Marker({
            position,
            map,
            title: `${title}`,
          });
          marker.addListener("click", () => {
            infowindow.setContent("<h3>"+title+"</h3><p>"+descripcion+"</p>");
            infowindow.open({
              anchor: marker,
              map,
              shouldFocus: false,
            });
          });
        });
      }

      window.initMap = initMap;
    </script>

  </head>
  <body>
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJdSM2wGIeRadk-QmRy8YrCp6mQ0nXons&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>