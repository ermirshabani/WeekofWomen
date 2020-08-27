<?php
/*
//Adresa e serverit që default është localhost.
define('DB_SERVER', 'localhost'); 

//Useri i localhostit që default është root.
define('DB_USERNAME', 'weekofwomen'); 

//Passwordi që default është i zbrazet.
define('DB_PASSWORD', 'ms8)e:AP'); 

//Emri i databazës tuaj.
define('DB_NAME', 'Projekti2020'); 
*/


//Adresa e serverit që default është localhost.
define('DB_SERVER', 'localhost'); 

//Useri i localhostit që default është root.
define('DB_USERNAME', 'root'); 

//Passwordi që default është i zbrazet.
define('DB_PASSWORD', ''); 

//Emri i databazës tuaj.
define('DB_NAME', 'Projekti2020'); 


// Përpjekje për t'u lidhur me bazën e të dhënave MySQL.
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Kontrolloni lidhjen.
if($link === false){
	// Verifikohet lidhja me databazë.
    die("Gabim n&euml; lidhje !" . mysqli_connect_error());
}
?>