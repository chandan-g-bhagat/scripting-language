<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Representation</title>
</head>
<body>
    <?php 
        //4 different ways to represent a string
        //1. Single Quotes
        echo '<h1>Single Quotes</h1>';
        $name='Chandan';
        echo $name;
        echo "<br>";
        //2. Double Quotes
        echo '<h1>Double Quotes</h1>';
        $name="Chandan";
        echo $name;
        echo "<br>";
        //3. heredoc
        echo '<h1>Heredoc</h1>';
        $name=<<<"test"
        Chandan
        test;
        echo $name;
        echo "<br>";
        //4. Nowdoc
        echo '<h1>Nowdoc</h1>';
        $name=<<<'EOD'
        Chandan
        EOD;
        echo $name;
        echo "<br>";

    ?>
</body>
</html>