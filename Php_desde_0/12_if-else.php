<?php 
    if($_POST){
        $ValorA = $_POST['NumA'];
        $ValorB = $_POST['NumB'];

        // Operadores aritmeticos

        $TT_S = $ValorA + $ValorB;
        $TT_R = $ValorA - $ValorB;
        $TT_M = $ValorA * $ValorB;
        $TT_D = $ValorA / $ValorB;

        if($ValorA != $ValorB){
            echo "El valor de A es diferente al de B";
        }else{
            echo "El valor de A es igual al de B";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="12_if-else.php" method="post">
        Valor A:
        <input type="text" name="NumA" id="">
        <br>
        Valor B:
        <input type="text" name="NumB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>