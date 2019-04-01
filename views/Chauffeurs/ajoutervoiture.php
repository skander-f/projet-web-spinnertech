<?PHP
include "../../entities/voiture.php";
include"../../core/voitureC.php";


if (isset($_POST['matricules']) and isset($_POST['marque']) and isset($_POST['couleurs']) and isset($_POST['types']) and isset($_POST['dates']) and isset($_POST['nb_places']) and isset($_POST['pays']) ){
$voiture1=new voiture($_POST['matricules'],$_POST['marque'],$_POST['couleurs'],$_POST['types'],$_POST['dates'],$_POST['nb_places'],$_POST['pays'],$_POST['dates']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$voiture1C=new VoitureC();
$voiture1C->ajouterVoiture($voiture1);
header('Location: Ajouter.php');

    
	
}

?>