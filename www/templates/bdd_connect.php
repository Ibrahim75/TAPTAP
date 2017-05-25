<?php
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=teechme;charset=utf8', 'root', 'NON');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>