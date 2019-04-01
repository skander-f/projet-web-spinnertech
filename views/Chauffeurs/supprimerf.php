<?PHP
include "../../core/voitureC.php";
$voitureC=new VoitureC();
if (isset($_POST["matricules"])){
	$voitureC->supprimerVoiture($_POST["matricules"]);
	header('Location: Supprimer.html');
}

?>