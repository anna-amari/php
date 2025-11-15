<?php
// That PHP code expects you to pass values through the browser’s 
// address bar using the GET method — meaning, you’ll provide the numbers and operation directly in the URL.
// http://localhost/PHP/Activity/activity-2/activity-2.php?num1=10&num2=5&ao=plus
// http://localhost/PHP/Activity/activity-2/activity-2.php?num1=10&num2=5&ao=minus
// http://localhost/PHP/Activity/activity-2/activity-2.php?num1=10&num2=5&ao=multiply
// http://localhost/PHP/Activity/activity-2/activity-2.php?num1=8&num2=2&ao=divide
// http://localhost/PHP/Activity/activity-2/activity-2.php?num1=7&num2=3&ao=modulo


$num1 = (int)$_GET['num1'];
$num2 = (int)$_GET['num2'];
$ao = $_GET['ao'];

if ($ao == 'plus') {
    $answer = $num1 + $num2;
    $ope = 'Sum';
} else if ($ao == 'minus') {
    $answer = $num1 - $num2;
    $ope = 'Difference';
} else if ($ao == 'multiply') {
    $answer = $num1 * $num2;
    $ope = 'Product';
} else if ($ao == 'divide') {
    if ($num2 == 0) {
        echo "<h1>Division by zero is not allowed.</h1>";
        exit;
    }
    $answer = $num1 / $num2;
    $ope = 'Quotient';
} else if ($ao == 'modulo') {
    if ($num2 == 0) {
        echo "<h1>Modulo by zero is not allowed.</h1>";
        exit;
    }
    $answer = $num1 % $num2;
    $ope = 'Remainder';
} else {
    echo "<h1>Unknown operation.</h1>";
    exit;
}


echo "<h2 style='color: #AA336A; position: absolute;  top: 105px;  margin-left: 500px;'> The " . $ope . " of " . $num1 . " and " . $num2 . " is " . $answer . ".</h2>";
?>

<img src="calc.jpg" style="height: 600px; width: 500px; margin-left: 440px;">
