<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radaras</title>
    <link rel="stylesheet" type="text/css" href="src/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
   
<form method="post">
  <div class="forma">   
    Greicio fiksavimo data ir laikas:<br>
    <input type="text" class="form-control" name="date" placeholder="pvz: 2016-12-31 23:15:25"><br>
    Automobilio registracijos numeris:<br>
    <input type="text" class="form-control" name="number"><br>
    Nuvaziuotas atstumas:<br>
    <input type="number" class="form-control" name="distance"><br>
    Sugaistas laikas sekundemis:<br>
    <input type="number" class="form-control" name="time"><br>
    <button type="submit" class="btn btn-primary mb-2" name="submit">Prideti Automobili</button>
  </div>
</form>
<br>
<p><b>Automobiliu paieska pagal registracijos numeri:</b></P>
<form method="get">
    <div class="tablewidth">
        <input type="text" class="form-control" name="filter"><br>     
        <input type="submit" class="btn btn-primary mb-2" value="Filtruoti">
    </div>
</form>           

<?php include 'src/pagrindinis.php';?> 
</body>
</html>
