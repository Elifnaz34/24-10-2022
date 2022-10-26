<?php
$simdi =time();
$dogum=mktime(0,0,0,08,27,2005);
$fark=$simdi-$dogum;
$gun=$fark/(24*60*60);
$gun=floor($gun);
echo $gun." 'gundur hayattasiniz";
?>