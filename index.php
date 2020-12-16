<!DOCTYPE html>
<html>
<head>
    <title>PHP Store</title>
</head>
<body>
<?php
    $name = "Bui Van Ha";
    $age = 19;

    $product['car'] = 20;
    $product['tree'] = 18;
    $product['pen'] = 19;

    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>I am ".$age." years old</h2>";

    foreach ($product as $item => $value) {
        if($value >= $age) {
            echo "<h3>I am ".$value." years old</h3>";
        }
    }

    $amount = 800;
    $taxRate = 0.0825;
    $addedTax = $amount * $taxRate;
//    echo $addedTax;
//    echo  "\n";
g
    function tax_calx($amount, $tax) {
        $calulate = $amount * $tax;
        $amount = round($amount + $calulate, 2);
        return $amount;
    }

    echo tax_calx(750,0.233);
?>
</body>
</html>