<?php
$simdi=getdate();
print_r($simdi);
echo "<hr>";
echo "Saniye: ",$simdi["seconds"], "<br>";
echo "Dakika: ",$simdi["minutes"], "<br>";
echo "Saat: ",$simdi["hours"], "<br>";
echo "Gun: ",$simdi["mday"], "<br>";
echo "Haftanin kacinci gunu: ",$simdi["wday"],"<br>";
echo "Ay: ",$simdi["mon"], "<br>";
echo "Yil: ",$simdi["year"], "<br>";
echo "Yilin kacinci gunu: ",$simdi["yday"],"<br>";
echo "Haftanin hangi gunu: ",$simdi["weekday"],"<br>";
echo "Yilinhangi ayi: ",$simdi["month"], "<br>";
?>
