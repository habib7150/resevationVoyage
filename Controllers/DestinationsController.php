<?php 
require_once '../Models/Destinations.php';


if(!isset($_GET['action'])){
    $destinations = fetchDestinations();
    include '../Views/destinations/index.php';
}else{
    if ($_GET['action'] == "create") {
        include '../Views/destinations/create.php';
    }
    if ($_GET['action'] == 'insert') {
        $libelle = $_POST['Libelle'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $disponibilite = $_POST['disponibilite'];
        insertDestination($libelle, $description, $prix, $disponibilite);
        header('Location: DestinationsController.php');
    }
    
}