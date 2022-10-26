<?php
function cevre($kenar)
{
	return $kenar*4;
}
function alan($kenar)
{
	return $kenar * $kenar;
}

$kenar=6;
$cevre=cevre($kenar);
$alan=alan($kenar);
echo "Cevre=".$cevre."<br>";
echo "Alan=".$alan."<br>";
?>