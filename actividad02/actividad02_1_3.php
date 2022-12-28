
<?php
// 1.3 - DAW_M07_ACT_02_Marcos_Davi_Carvalho_dos_Santos
$cuantasVeces = $_POST["cuantasVeces"];
if(isset($cuantasVeces)){
for($i=1; $i<=$cuantasVeces;$i++){
    echo $i.".- Los bucles son fáciles!"."<br>";
}
}
echo "Se acabó";