<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grados celcius</title>
</head>
<body>
    <?php 
        /*
        Escribir un programa que convierta un valor dado 
        en grados Fahrenheit a grados Celsius. Recordar 
        que la fórmula para la conversión es: 
        C = (F-32)*5/9
        */ 
        $Fahrenheit = $_GET["celcius"];
        $conversion = ($Fahrenheit-32)*5/9;

        echo "Los grados que has introducido en Fahrenheit son ".$conversion." en celcius";
    ?>

</body>