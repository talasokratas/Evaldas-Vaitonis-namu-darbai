<?php 

function sveikintis($vardas, $pavarde) {
    echo "<br>Sveiki " . $vardas . " " . $pavarde; 
}

sveikintis('Evaldas', 'Vaitonis');

$arr = [1,4,5,6,8];

function masyvo_vidurkis(array $masyvas) {
    if(count($masyvas)) {
        $masyvas = array_filter($masyvas);
        return $average = array_sum($masyvas)/count($masyvas);
}
}
echo masyvo_vidurkis($arr);


function informacija(array $masyvas) {
    for ($i = 0; $i < count($masyvas);$i++) {
        $vardas = $masyvas[$i][0]; 
        $pavarde = $masyvas[$i][1];
        $e_pastas = $masyvas[$i][2];
        echo "<br>" . $vardas . " " . $pavarde . " " . $e_pastas;
    }
}

$informacija = [
               ['Evaldas','Vaitonis','evaldas.vaitonis@gmail.com'],
               ['Povilas', 'Petraitis', 'povilas@petraitis.lt'],
               ['Egle', 'Eglaite','info@apsvietimosistemos.lt'],
               ['Jonas', 'Kepalas', 'me@kepalas.lt']
               ];

informacija($informacija);          

function ar_tuscias($a) {
    if(isset($a)) {
        echo  '<br>Parametras nera tuscias';
    } else {
        echo '<br>Parametras tuscias';
    }
}

$b = 5;
ar_tuscias($b);
ar_tuscias($c);


function pasveikinimai(array $masyvas){
    for ($i = 0; $i < count($masyvas); $i++)
        sveikintis($masyvas[$i][0],$masyvas[$i][1]);
}

$zmones = [
          ['Jonas','Jonaitis'],
          ['Petras','Petraitis'],
          ['Evaldas', 'Vaitonis']   
          ];
          
pasveikinimai($zmones);

$masyvas_a = [5, 6, 10, 15];
$masyvas_b = [8, 5, 3, 25];



function vidurkiu_skirtumas(array $a, array $b ) {
    $skirtumas = masyvo_vidurkis($a) - masyvo_vidurkis($b);
    return $skirtumas;
}

 echo '<br>Masyvu vidurkiu skirtumas ' . vidurkiu_skirtumas($masyvas_a,$masyvas_b);

 function dalikliai($n){
    $a = [];       
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            array_push($a, $i);
        }
    }
    return $a;
  }

function ar_tobulas ($n) {
     $suma = array_sum(dalikliai($n)); 
     return $suma === $n; 
}

echo "<br>Tobuli skaiciai nuo 1 iki 1000:";
for ($i = 1; $i < 1000; $i++) {
   if (ar_tobulas($i)){
    echo "<br>" . $i;
   }
 }  

