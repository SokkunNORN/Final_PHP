
<?php

include 'src/functions.php';

if(isset($_POST['btn-cal'])) {
    $fNumber = $_POST['first'];
    $sNumber = $_POST['second'];
    $operator = $_POST['operator'];

    $cal = new Calculator($fNumber, $sNumber);
    if ($operator == 'Add') {
        echo $fNumber . " + " . $sNumber . " = " . $cal->plus();
    } else if ($operator == 'Minus') {
        echo $fNumber . " - " . $sNumber . " = " . $cal->minus();
    } else if ($operator == 'Multiply') {
        echo $fNumber . " x " . $sNumber . " = " . $cal->multi();
    } else if ($operator == 'Divide') {
        echo $fNumber . " / " . $sNumber . " = " . $cal->divide();
    } else {
        echo "select an operator";
    }

}







