<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = rand(1,30);
        $y = rand(1,30);
        echo "$x $y";
        if ($x > $y) {
            $max = $x;
            $frase = "MAGGIORE";
        } else {
            $max = $y;
            if ($x == $y) {
                $frase = "UGUALE";
            } else {
                $frase = "MINORE";
            }
        }
        echo "<h1> $frase </h1>";
        if ($max < 10) {
            echo "<p> Num $max minore di 10 </p>";
        } else if ($max > 20) {
            echo "<p> Num $max maggiore di 20 </p>";
        } else {
            echo "<p> Num $max compreso fra 10 e 20 </p>";
        }

    ?>
</body>
</html>