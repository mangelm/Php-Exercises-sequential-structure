<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Minutos</title>
</head>
<body>
    <?php 
        /*
        Realiza un programa que reciba una cantidad de minutos 
        y muestre por pantalla a cuantas horas y minutos 
        corresponde. Por ejemplo: 1000 minutos son 16 horas y 40 minutos.
        */ 
        $minuto = $_GET["minuto"];

        $hora = floor($minuto/60); 

        $minutos = $minuto%60; //resto 

        echo $minuto." minutos. Son ".$hora." horas y ".$minutos." y minutos";

   ?> 

</body>