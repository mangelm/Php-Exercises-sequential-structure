<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pintar y Calcular con Echo</title>
</head>
<body>
<?php 
    /*
    Declara 2 variables de texto (txt1 = pon aquí un título para 
    la página, txt2 = pon aquí tu
    videojuego favorito) y 2 variables numéricas.
    Pinta con la función echo el contenido de la primera variable 
    de texto con formato h3 (html)
    y el contenido de la segunda variable de texto junto al texto: 
    Mi videojuego favorito es .
    Pinta también la suma de los valores de las variables numéricas.
    */ 
    $txt1 = "La historia de mi videojuego favorito";
    $txt2 = "Final Fantasy IX";
    $num1 = 8;
    $num2 = 1;
    
    $suma = $num1 + $num2;
    echo "<h3>".$txt1."</h3>"."<br/>"."Mi videojuego favorito es ".$txt2."<br/>"."El resultado de la suma de ".$num1." y ".$num2." es ".$suma;
?> 

</body>