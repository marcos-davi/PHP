<?php
// 1.4 - DAW_M07_ACT_02_Marcos_Davi_Carvalho_dos_Santos
$nota = $_POST["nota"];

if($nota < 0 || $nota > 10){
    echo "Nota no válida!";
} else if($nota >=0 && $nota <= 4.99){
    echo "Nota ".$nota." Suspenso!";
}else if($nota >=5 && $nota <= 6.99){
    echo "Nota ".$nota." Aprobado!";
}else if($nota >=7 && $nota <= 8.99){
    echo "Nota ".$nota." Notable!";
}else if($nota >=9 && $nota <= 9.99){
    echo "Nota ".$nota." Excelente!";
}else if ($nota == 10){
    echo "Nota ".$nota." Matrícula de honor";
}