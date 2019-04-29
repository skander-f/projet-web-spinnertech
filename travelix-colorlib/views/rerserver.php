<?php
include "../core/ReservationC.php";
include "../entities/reservation.php";


if ((isset($_POST['mail'])) and (isset($_POST['marque'])) and (isset($_POST['type'])) and (isset($_POST['prix'])) and (isset($_POST['date1'])) and (isset($_POST['couleur'])) and (isset($_POST['nb_places']) ) and (isset($_POST['matricule'])) and (isset($_POST['date2'])))

{



    $reservation1=new reservation('1',($_POST['mail']) ,($_POST['marque']),($_POST['type']) ,($_POST['prix']) ,($_POST['date1']),($_POST['couleur']) ,($_POST['nb_places']) ,($_POST['matricule']),($_POST['date2'])) ;

    $reservation1C=new ReservationC();
    $reservation1C->ajouterreservation($reservation1);





header('Location: offers2.php');
}
else echo 'verif' ;

 ?>