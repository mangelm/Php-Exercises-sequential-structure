<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Final</title>
</head>
<body>
    <?php 
    
    /*
    Un alumno desea saber cuál será su calificación final en la materia de
    Algoritmos. Dicha calificación se compone de los siguientes porcentajes:
     55% del promedio de sus tres calificaciones parciales.
     30% de la calificación del examen final.
     15% de la calificación de un trabajo final.
    */
    $parcial1 = $_GET["parcial1"];
    $parcial2 = $_GET["parcial2"];
    $parcial3 = $_GET["parcial3"];
    $exfinal = $_GET["exfinal"];
    $trabfinal = $_GET["trabfinal"];
    
    $total_parcial = (((($parcial1+$parcial2+$parcial3)/3)*55)/100);

    $total_exfinal = (($exfinal*30)/100);

    $total_trabfinal = (($trabfinal*15)/100);
    
    $nota_final = $total_parcial + $total_exfinal + $total_trabfinal;
    
    echo "La nota final es ".$nota_final;
    //vardump para saber el tipo de la variable
    ?> 

</body>