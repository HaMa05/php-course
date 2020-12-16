<!DOCTYPE html>
<html>
<head>
    <title>PHP Store</title>
</head>
<body>
<?php
    $name = "Bui Van Ha";
    $age = 19;

    $product['car'] = "BWM";
    $product['tree'] = 'violet';
    $product['pen'] = 'penchi';

    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>I am ".$age." years old</h2>";
    foreach ($product as $item => $value) {
        echo "<h3>".$item." is a ".$value."</h3>";
    }
?>
</body>
</html>