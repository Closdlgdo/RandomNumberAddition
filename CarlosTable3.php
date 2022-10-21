<!DOCTYPE>
<html>
<head>Carlos Table 3</head>
<body>

<?php
$r = mt_rand(1, 10);
$a = mt_rand(1, 10);
$p = $r + $a

?>
<table border="1px" cellpadding="4" cellspacing="50">

<tr>

<td>first number</td>

<td>second number</td>

<td>Total</td>

</tr>

<tr>

<?php

echo "<td>$r</td>";

echo "<td>$a</td>";

echo "<td> $p </td>"

?>

</tr>

</table>

</body>

</html>