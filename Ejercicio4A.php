<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios Calculos</title>
</head>
<body>
    <?php 
        /*
        Dados dos números, mostrar la suma, resta, 
        división, multiplicación, exponencial de ambos.
        */
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];


        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $division = $num1 / $num2;
        $multiplicar = $num1*$num2;
        $exponencial = $num1**$num2;

        echo "El resultado de la suma es: ".$suma."<br/>";
        echo "El resultado de la resta es: ".$resta."<br>";
        echo "El resultado de la division es: ".$division."<br>";
        echo "El resultado de la multiplicacion es: ".$multiplicar."<br>";
        echo "El resultado exponencial es: ".$exponencial."<br>";
        
    ?>
</body>