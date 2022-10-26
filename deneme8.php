<?php
$tarih="2012-02-24";
$tarih=explode("-",$tarih);
$zaman=mktime(0,0,0, $tarih [1], $tarih[2], $tarih[0]);
$tarih=date("d F Y 1",$zaman);
$ingilizce_gun=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
$turkce_gun=array("Pazartesi","Salı","Carsamba","Persembe","Cuma","Cumartesi","Pazar");
$ingilizce_ay=array("January","February","March","April","May","June","July","August","September","October","November","December");
$turkce_ay=array("Ocak","Subat","Mart","Nisan","Mayis","Haziran","Temmuz","Agustos","Eylul","Ekim","Kasım","Aralik");
$tarih=str_replace($ingilizce_ay,$turkce_ay,$tarih);
$tarih=str_replace($ingilizce_gun,$turkce_gun,$tarih);
echo $tarih;
?>