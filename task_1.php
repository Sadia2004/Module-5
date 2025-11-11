<?php

define("APP_NAME", "Expense Calculator");
define("AUTHOR", "Sadia Jannat Upoma");


echo "<h3>Using echo:</h3>";
echo "App Name: " . APP_NAME . "<br>Author: " . AUTHOR . "<br>";

print("<h3>Using print:</h3>");
print("App Name: " . APP_NAME . "<br>Author: " . AUTHOR . "<br>");

printf("<h3>Using printf:</h3>App: %s | Author: %s<br><br>", APP_NAME, AUTHOR);


$food = 400;
$transport = 350;
$others = 150;


$total = $food + $transport + $others;
$average = $total / 3;

echo "<b>Total Expense:</b> $total<br>";
echo "<b>Average Expense:</b> $average<br>";


if ($total > 1000) {
    echo "<p style='color:red;'>Budget Exceeded</p>";
} else {
    echo "<p style='color:green;'>Within Budget</p>";
}


echo "<h4>Using Ternary:</h4>";
$message = ($total > 1000) ? "Over budget!" : "All good!";
echo $message . "<br>";

echo "<h4>Using Switch Case:</h4>";
switch (true) {
    case ($total <= 500):
        echo "Low expense range.<br>";
        break;
    case ($total <= 1000):
        echo "Medium expense range.<br>";
        break;
    default:
        echo "High expense range.<br>";
}

function calculateTotal($f, $t, $o)
{
    return $f + $t + $o;
}


function checkBudget($total)
{
    return ($total > 1000) ? "Budget Exceeded" : "Within Budget";
}


echo "<h3>Using Functions:</h3>";
$totalExpense = calculateTotal($food, $transport, $others);
echo "Calculated Total: $totalExpense<br>";
echo "Budget Check: " . checkBudget($totalExpense);
?>
