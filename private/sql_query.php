<?php require_once('../../../private/initialize.php'); ?>
<?php

$sql = h("SELECT ime_pet FROM lista where id=" . $pregled->br_kartona);
$lista = Lista::find_by_sql($sql);
$sql2 = "SELECT ime FROM lista where id=" . $pregled->br_kartona;
$lista2 = Lista::find_by_sql($sql2);
$sql3 = "SELECT prezime FROM lista where id=" . $pregled->br_kartona;
$lista3 = Lista::find_by_sql($sql3);
$sql4 = "SELECT br_tel FROM lista where id=" . $pregled->br_kartona;
$lista4 = Lista::find_by_sql($sql4);
$sql5 = "SELECT adresa FROM lista where id=" . $pregled->br_kartona;
$lista5 = Lista::find_by_sql($sql5);
$sql6 = "SELECT vrsta FROM lista where id=" . $pregled->br_kartona;
$lista6 = Lista::find_by_sql($sql6);
$sql7 = "SELECT rasa FROM lista where id=" . $pregled->br_kartona;
$lista7 = Lista::find_by_sql($sql7);

