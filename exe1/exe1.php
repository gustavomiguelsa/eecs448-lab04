<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function mul($x, $y) {
    $z = $x * $y;
    return $z;
}

$limit = 100;

echo "<table >";

for ($x = 0; $x <= $limit; $x++) {
	echo "<tr>";
	for($y = 0; $y <= $limit; $y++) {
		if($x == 0 && $y == 0)
			echo "<td></td>";
		elseif($x == 0 && $y != 0)
			echo "<td>" . $y . "</td>";
		elseif($x != 0 && $y == 0)
			echo "<td>" . $x . "</td>";
		else
			echo "<td>" . $x*$y . "</td>";
	}
	echo "</tr>";
}

echo "</table>";

?>
