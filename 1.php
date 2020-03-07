<?php 
$hari =0;
$jmHari = 0;
$iguana = 2169;
$jmIguana = 0;

for ($i=0; $i < 277; $i++){
    if(($i - $jmHari) == 92){
        $jmIguana = round($iguana*(11.1/100));
        $iguana = round($iguana - $jmIguana);
        $iguana *=2;
        $jmHari = $i;
        echo "<br>";
        echo $iguana;
    }
}

?>