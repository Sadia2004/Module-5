<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['set'])) {
    $_SESSION['name'] = $_POST['name'] ?? 'Guest';
    $_SESSION['budget'] = $_POST['budget'] ?? 0;
}

if (isset($_POST['delete'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Task 3</title></head>
<body>
<h2>Session Example</h2>

<form method="post">
    Name: <input name="name" required>
    Budget: <input name="budget" type="number" required>
    <button type="submit" name="set">Set Session</button>
    <button type="submit" name="delete">Delete Session</button>
</form>

<?php
if (isset($_SESSION['name'])) {
    echo "<p>Welcome, <b>{$_SESSION['name']}</b>! Your budget is <b>{$_SESSION['budget']}</b>.</p>";
}


function recursiveSum($arr)
{
    if (count($arr) === 0) return 0;
    $first = array_shift($arr);
    return $first + recursiveSum($arr);
}

$nums = [10, 20, 30, 40];
echo "<p>Recursive Sum: " . recursiveSum($nums) . "</p>";


function applyDiscount($amount, $callback)
{
    return $callback($amount);
}

$discounted = applyDiscount(1000, function ($a) {
    return $a * 0.9;
});
echo "<p>Discounted Value (10% off): $discounted</p>";


function divide($a, $b)
{
    try {
        if ($b == 0) {
            throw new Exception("Division by zero not allowed!");
        }
        return $a / $b;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        echo "<br>Operation complete.<br>";
    }
}

echo "<p>Divide Result: " . divide(10, 2) . "</p>";
echo "<p>Divide Error: " . divide(5, 0) . "</p>";
?>
</body>
</html>
