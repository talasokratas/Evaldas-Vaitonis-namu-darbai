<?php

function skaliarine_masyvu_sandauga (array $a, array $b) {
    $suma = 0;
    for ($i = 0; $i < count($a); $i++) {
        $suma += $a[$i] * $b[$i];
    }
    return $suma;
}

$masyvas_a = [5,6,10,15];
$masyvas_b = [8,5,3,25];

var_dump(skaliarine_masyvu_sandauga($masyvas_a, $masyvas_b));

$zmones_1 = [
          [Jonas, Jonaitis, 37506021325],
          [Janina, Jonaitiene, 48012251111],
          [Povilas, Povilaitis, 34603031465],
          ];
          
$zmones_2 = [
          [Petras, Petraitis, 36708254578],
          [Stase, Stasiene , 47707077777 ],
          [Ceslovas, Vejas, 35010316465],
          ];

var_dump($zmones_1);         
// pridedam antra masyvo elementus prie pirmojo pirmu budu galo
 for ($i = 0; $i < count($zmones_2); $i++) {
      
         array_push($zmones_1, $zmones_2[$i]);
     }

// pridedadam antro masyvo elementus prie pirmojo antru budu

for ($i = 0; $i < count($zmones_2); $i++) {
      
    $zmones_1 [] = $zmones_2[$i];
}

var_dump($zmones_1);

// istrinam pridetus elementus is pirmojo masyvo
array_splice ($zmones_1, 3);

var_dump($zmones_1);
// pridedadam antro masyvo elementus i pirmojo pradzia
for ($i = 0; $i < count($zmones_2); $i++) {
      
    array_unshift($zmones_1, $zmones_2[$i]);
}
 
var_dump($zmones_1);





 $a = [
    '49001010123' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'gdata' => '1990-01-01'
      ],
    '37502055584' => [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'gdata' => '1985-02-05'
        ],
    '47502015584' => [
        'vardas' => 'Grazina',
        'pavarde' => 'Navickiene',
        'gdata' => '1980-12-05'
        ], 
    '37502055584' => [
        'vardas' => 'Zigmas',
        'pavarde' => 'Petraitis',
        'gdata' => '1977-09-30'
        ],           
    ];
     
    foreach ($a as $key => $value) {
        if (substr($key, 0, 1) === '3') {
            unset($a[$key]);
        }
    }    
 
    echo 'tik moterys:';
    var_dump($a);


    $vardai = ['Jonas', 'Petras', 'Antanas','Povilas'];
/*
Turime masyvą $a = [‘Jonas’, ‘Petras’, ‘Antanas’,‘Povilas’].
Atspausdinkite visas galimas skirtingas poras laikant, kad pvz
poros ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’ yra tokios pat.
*/
    
    $count = count($vardai);
    $n = 1;
    foreach ($vardai as $vardas) {
        for ($i = $n; $i < $count; $i++) {
         echo $vardas . '-' . $vardai[$i] . ' ';
        }
    echo '<br>';
    $n++;
    };   
    
 /*
Ta pati sąlyga tik pvz poros ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’
yra laikomos skirtingomis.
 */   

foreach ($vardai as $vardas) {
    for ($i = 0; $i < $count; $i++) {
        if ($vardai[$i] != $vardas){
        echo $vardas . '-' . $vardai[$i] . ' ';
        }
    }    
echo '<br>';
}

/*
3. Turime daugiamatį masyvą, kuris aprašo kažką panašaus į
Excel lentelę arba matricą, t.y. pirmas indeksas žymi eilutę, o
antras stulpelį. Eilutės gali turėti skirtingą elementų (stulpelių)
skaičių. Suskaičiuokite stulpeliuose esančių skaičių sumas ir
išveskite didžiausią.

testuokite su masyvu:
$a = [[1, 3, 4], [2, 5], [2 => 3, 5 => 8], [1, 1, 5 => 1]];
*/

$a = [
     [1, 3, 4], 
     [2, 5], 
     [2 => 3, 5 => 8], 
     [1, 1, 5 => 1]
     ];

 $max = 0;       
 foreach ($a as $eilute) {  
     foreach ($eilute as $key => $value) {
         if (($sumuMasyvas[$key] += $value) > $max){
             $max = $sumuMasyvas[$key];
         }        
     }
 }
 var_dump ($sumuMasyvas);
 var_dump($max);