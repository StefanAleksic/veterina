<?php require_once('../../../private/initialize.php'); ?>
<?php
//This will make sum in column cena
$sql10 = "SELECT SUM(cena) AS value_sum FROM pregled";
$sql10 .=" WHERE date between '$searchq1' and '$searchq2'";
$result = $database->query($sql10);
$qty= 0;
while ($num = $result->fetch_assoc()) {
    $qty += $num['value_sum'];
}
$sql11 = "SELECT SUM(cena1) AS value_sum1 FROM pregled";
$sql11 .=" WHERE date between '$searchq1' and '$searchq2'";
$result1 = $database->query($sql11);
$qty1= 0;
while ($num = $result1->fetch_assoc()) {
    $qty1 += $num['value_sum1'];
}
$sql12 = "SELECT SUM(cena2) AS value_sum2 FROM pregled";
$sql12 .=" WHERE date between '$searchq1' and '$searchq2'";
$result2 = $database->query($sql12);
$qty2= 0;
while ($num = $result2->fetch_assoc()) {
    $qty2 += $num['value_sum2'];
}
$sql13 = "SELECT SUM(cena3) AS value_sum3 FROM pregled";
$sql13 .=" WHERE date between '$searchq1' and '$searchq2'";
$result3 = $database->query($sql13);
$qty3= 0;
while ($num = $result3->fetch_assoc()) {
    $qty3 += $num['value_sum3'];
}
$sql14 = "SELECT SUM(cena4) AS value_sum4 FROM pregled";
$sql14 .=" WHERE date between '$searchq1' and '$searchq2'";
$result4 = $database->query($sql14);
$qty4= 0;
while ($num = $result4->fetch_assoc()) {
    $qty4 += $num['value_sum4'];
}

