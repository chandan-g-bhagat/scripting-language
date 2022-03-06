<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>

</head>
<body>
    <?php 
        echo "Casting";
        echo "<br>";
        $weight=(int)18.025455;
        echo "The weight is ".$weight;
        echo "<br>";
        $arr=(array)$weight;
        $arr[1]=19;
        echo $arr[1];
        echo "<br>";
    ?>
</body>
</html>