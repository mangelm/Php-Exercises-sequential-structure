<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo y comisiones</title>
</head>
<body>
    <?php 
    /*
    Un vendedor recibe un sueldo base más un 10% extra por 
    comisión de sus ventas, el vendedor desea saber 
    cuánto dinero obtendrá por concepto de comisiones 
    por las tres ventas que realiza en el mes y el total 
    que recibirá en el mes tomando en cuenta su sueldo base 
    y comisiones.
    */ 
    $sueldo = $_GET["sueldo"];
    $venta1 = $_GET["venta1"];
    $venta2 = $_GET["venta2"];
    $venta3 = $_GET["venta3"];
    
    $com1 = ($venta1*10)/100;
    $com2 = ($venta2*10)/100;
    $com3 = ($venta3*10)/100;

    $sueldototal = $com1+$com2+$com3+$sueldo;

    echo "Tu sueldo total es: ".$sueldototal;
    ?> 

</body>