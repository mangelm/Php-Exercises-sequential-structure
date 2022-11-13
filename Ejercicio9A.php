<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precio Final</title>
</head>
<body>
    <?php 
    /*
    Una tienda ofrece un descuento del 15% sobre el total de la 
    compra y un cliente desea saber cuánto deberá pagar 
    finalmente por su compra.
    */ 
    $compra = $_GET["compra"];

    $descuento = ($compra*15)/100;

    $compra_total = $compra - $descuento;

    echo "El precio final de tu compra es ".$compra_total." euros";
    ?> 

</body>