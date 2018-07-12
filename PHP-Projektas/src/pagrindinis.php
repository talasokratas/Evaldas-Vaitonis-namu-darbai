<?php
require_once 'Radar/Radar.php';
use Radar\Radar;

$tableStart = '<table class="tablewidth"><tr><th>Data ir laikas</th><th>Reg. Nr.</th>
               <th>Atstumas, m</th><th>Laikas, s</th><th>Greitis, km/h</th><tr>';
$tableEnd = '</table>';
$tableBySpeed = '<p class="tablewidth"><br><b>Isrikiuota pagal greiti mazejimo tvarka:</b></p>';
$filterName ='<br><p><b>Ieskoma pagal: ' . $_GET['filter'] . '</b></p><br>';
$noFilter = '<br><p><b>Rodomi visi irasai</b></p><br>';
$noDataFound = '<tr><td colspan="5"><b>Irasu nerasta!</b></td></tr>';


session_start();
//session_unset();

if(!isset($_SESSION ['auto'])) {
   $_SESSION ['auto'] = []; 
}

if (isset($_POST['submit'])) {
    if ($_POST['date'] === "" || $_POST['number'] === "" || $_POST['distance'] === "" || $_POST['time'] === "") {
        echo '<p class="tablewidth">Klaida: reikia uzpildyti visus laukelius</p>';
    } else {
        $_SESSION ['auto'][] = new Radar(new DateTime($_POST['date']),$_POST['number'],$_POST['distance'],$_POST['time']);
    }
}

usort($_SESSION ['auto'],[Radar::class, 'speedSort']);

echo $tableStart;

if (!isset($_GET['filter']) || ($_GET['filter']) === '') {
    echo $noFilter;
    foreach ($_SESSION ['auto'] as $value) 
        echo $value->info();    
} else {
    echo $filterName;
    $count = 0;
    foreach ($_SESSION ['auto'] as $value) { 
        if ($value->filterPlateNumber()) {
            echo $value->info();
            $count++;
        }
    }
}         

if ($count === 0 || empty($_SESSION ['auto']))
    echo $noDataFound;    

echo $tableEnd;


