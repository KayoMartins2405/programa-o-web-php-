<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
     
</head>
<body>

    
    <?php
    $imagempais = array();
    $nomepais = array();
    $continente = array();
    
    $nomepais[0] = "Brasil";
    $nomepais[1] = "Argentina";
    $nomepais[2] = "Espanha";
    $nomepais[3] = "Portugal";

    $continente[0] = "América";
    $continente[1] = "América";
    $continente[2] = "Europa";
    $continente[3] = "Europa";

    $imagempais[0] ="img/bandeiras/brasil.jpg";
    $imagempais[1] ="img/bandeiras/argentina.png";
    $imagempais[2] ="img/bandeiras/espanha.png";
    $imagempais[3] ="img/bandeiras/portugal.png";
    
   
    
    for($i=0;$i<count($nomepais);$i++){
        echo "<div class='coluna'>";
        echo "<img src='$imagempais[$i]'/>";
        echo "<h1> $nomepais[$i] </h1>";
        echo $continente[$i];
        echo " <a href='pais.php?x=$nomepais[$i]&y=$continente[$i]'> Pais <a/>";
        echo "</div>";
    }

    
   

   
    
    ?>


    



</body>
</html>