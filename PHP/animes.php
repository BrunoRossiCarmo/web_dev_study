<?php
$pers = array('Nome','Eren','Reiner','Levi','Mikasa','Armin','Jean');
$pers2 = array('Eren' => 'AoT','Reiner'=> 'AoT','Levi'=> 'AoT','Mikasa'=> 'AoT','Armin'=> 'AoT','Jean'=> 'AoT');
$pers3 = array('Nota'=>'Nota','Eren' => 5.0,'Reiner'=> 8.7,'Levi'=> 10,'Mikasa'=> 10,'Armin'=> 9.9,'Jean'=> 8.75);
echo '<br>';
for($i=0;$i<sizeof($pers);$i++){
    $nota = array_values($pers3);
    if($i==0){
        echo  strtoupper($pers[$i]), " ",strtoupper($nota[$i]);
    }
    else{
        echo $pers[$i], " ",$nota[$i];
    }
    echo '<br>';
}
?>
