<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perimetro y area del rectangulo</title>
</head>
<body>
    <?php 

    /*
    Calcular el perímetro y área de un rectángulo
     dada su base y su altura.
    */

        $base = $_GET["base"];
        $altura = $_GET["altura"];
        
        $perimetro = (2*$base) + (2*$altura);
        $area = $base*$altura;

        echo "El area del Rectangulo es: ".$area."</br>"."El perimetro del Rectangulo es: ".$perimetro;
        
    ?>
</body>