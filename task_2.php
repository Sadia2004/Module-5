<?php

$expenses = [
    "Food" => 400,
    "Transport" => 350,
    "Others" => 150
];


array_push($expenses, 100); 
array_pop($expenses);       

$extra = ["Entertainment" => 200, "Medicine" => 100];
$merged = array_merge($expenses, $extra);

echo "<pre>";
print_r($merged);
echo "</pre>";

$totalExpense = array_sum($merged);
echo "Total Expense: $totalExpense<br>";


$string = "100,200,300,400";
$arrayFromStr = explode(",", $string);
$newString = implode("-", $arrayFromStr);
echo "Explode: ";
print_r($arrayFromStr);
echo "<br>Implode: $newString<br>";


$name = "expense report";
echo "Upper: " . strtoupper($name) . "<br>";
echo "Length: " . strlen($name) . "<br>";
echo "Substring (0-7): " . substr($name, 0, 7) . "<br>";
echo "Replace: " . str_replace("report", "summary", $name) . "<br>";


$file = "expenses.txt";
$data = "Expenses:\n" . print_r($merged, true);
file_put_contents($file, $data);


file_put_contents($file, "New Expense Added: Internet - 250\n", FILE_APPEND);

echo "<h3>File Content:</h3>";
echo nl2br(file_get_contents($file));
?>
