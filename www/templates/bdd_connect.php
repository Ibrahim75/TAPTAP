<?php
try
{
    $bdd = new PDO('mysql:host=localhost:8889;dbname=teechme;charset=utf8', 'root', 'root');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>