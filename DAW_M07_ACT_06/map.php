<?php
//DAW_M07_ACT_06_Marcos_Davi_Carvalho_dos_Santos
$con = mysqli_connect("localhost","root","root","google_maps") or die("No se ha 
	podido conectar con la base de datos");

$tipo = $_POST['tipo'];
$poblacion = $_POST['poblacion'];
if (empty($poblacion)) {
	$query = "SELECT * FROM locales where tipo ='$tipo'";

}else{
	$query = "SELECT * FROM locales where poblacion ='$poblacion'";
}

$result = mysqli_query($con, $query);



?>
<html>
  <head>
    <title>Mapa By Marcos Davi</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript">
    	let map;
		function initMap() {
			const myLatLng = { lat:  41.3879, lng: 2.16992 };
		  map = new google.maps.Map(document.getElementById("map"), {
		    center: myLatLng,
		    zoom: 8,
		  });

		  let misMarcadores = [];

		  <?php
		  while($locales = mysqli_fetch_array($result)){
		  	extract($locales);
		  	echo "misMarcadores.push(['".$nombre."',".$coordenadas.",'".$poblacion."','".$tipo."']);";
		  }
		  /* Set vars */
$key_api = "458f72bb06c9da5c9f690600f363e933";
$id_city = 3128760;
$name = "Petrópolis";

$owApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $poblacion. "&lang=es&units=metric&appid=" . $key_api;

/* Curl connection */
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $owApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

/* Decode and check cod */
$data = json_decode($response);
if($data->cod != 200) exit("An error has occurred: ".$data->message);
		  ?>
			
			const infowindow = new google.maps.InfoWindow();
			    misMarcadores.forEach(([title, position , poblacion], i) => {
			    	const marker = new google.maps.Marker({
			    	position,
			    	map,
			    	title:`${title}`,
			  	});
			    marker.addListener("click", () => {
			    infowindow.setContent("<h3>"+title+"</h3><p>"+poblacion+"</p>");
			    infowindow.open({
			    anchor: marker,
			    map,
			    houldFocus: false,
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
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQMafDL0yaWt6YzRuzbZDW_QTWmO3QJ50&callback=initMap&v=weekly"
      defer></script>
      <br>

      <div class="widget">
		<h3>Pronóstico del tiempo</h3>
		<div class="content">
			<h2><?php echo $data->name; ?></h2>			
		</div>

		<div class="representation">
			<img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" />
			<p><?php echo ucwords($data->weather[0]->description); ?></p>
		</div>
		
		<div class="content-full">
			<hr/>
			<div class="half">
				<b>Min. temp. : </b> <span class="min-temp"><?php echo $data->main->temp_min; ?>°C</span><br/>
				<b>Min. temp. : </b> <span class="max-temp"><?php echo $data->main->temp_max; ?>°C</span><br/>	
			</div>	
			<div class="half">	
				<b>Humedad: </b><?php echo $data->main->humidity; ?> %<br/>
				<b>Viento: </b><?php echo $data->wind->speed; ?> km/h<br/>
			</div>
			<p><small>Consultado el: <?php echo date('d/m/Y H:i:s'); ?></small></p>
		</div>
	</div> 
	
	<br>
	<br>
	
	<a href="index.php"><input type="button" name="volver" id ="volver" value="Volver"></a>
     
  </body>

</html>