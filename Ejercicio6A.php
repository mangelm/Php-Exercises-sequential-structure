<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <?php 
        /*Calcular la media de tres números pedidos.*/
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];

        $media = ($num1 + $num2 + $num3)/3;

        echo "La media es: ".$media;
    ?>

</body>