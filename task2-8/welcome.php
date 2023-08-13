<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="calc.php" method="GET" >
        <input type="text" name="num1" placeholder="Enter number 1" required>
        <input type="text" name = "operator">
        <input type="text" name="num2" placeholder="Enter number 2" required>
        <input type="submit" value="Calculate" name="submit">
    </form>
</body>
</html>

<?php

session_start();
if(isset($_SESSION['result']))
{
$result = $_SESSION['result'];
echo "<br>" ;
echo $result;
}


