<?php
require_once("conexion.php");
$con=mysqli_connect($server, $user, $password, $db_name) or die("Error al conectar con la base de datos");
$query="select*from lugar";
$result=mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
        *element that contains the map. */
      #map{
        height: 100%;
    }
      /* Optional: Makes the sample page fill the window. */
      html, body {
      	height: 100%;
        margin: 0;
        padding: 0;

      }
        
    
    </style>
  </head>
  <body>
    <div id="map" style="height: 50%; width: 50%;"></div>
    <script>
  var map;
  function initMap(){
    var myLatLng={lat: 41.3818, Ing: 2.1685};
        map=new google.maps.Map(document.getElementById( 'map'),{
        	});
<?php
$i=1;
while($fila=mysqli_fetch_array($result) ){
  extract ($fila);
?>

var contentString<?php echo $i;?>='<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading"><?php echo $nombre; ?></h1>'+
    '<div id="bodyContent">'+
    '<p><?php echo $nombre; ?></p>'+
    '</div>';
    var infowindow<?php echo $i;?>=new google.maps.InfoWindow({
  content: contentString<?php echo $i;?>
});
var image='https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
var marker<?php echo $i;?>=new google.maps.Marker({
  position: <?php echo $coordenadas; ?>,
  map: maр,
title: '<?php echo $nombre; ?>',
icon: image
});
marker<?php echo $i;?>. addListener('click', function(){
infowindow<?php echo $i;?>. open(map, marker<?php echo $i;?>);
});
<?php
$i++;
}
?>
</script>
<script async src="https://maps.googleapis.com/maps/api/js?key="AIzaSyDQMafDL0yaWt6YzRuzbZDW_QTWmO3QJ50&callback=initMap></script>
</body>
</html>