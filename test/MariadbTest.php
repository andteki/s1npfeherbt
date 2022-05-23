<?php 

include_once('src/includes/mariadb.php');

echo "Kapcsolat teszt...\n";
$mariadb = new Mariadb();
$mariadb->connectDb();
$mariadb->closeDb();
echo "Kapcsolat teszt vége.";