<?PHP
include "../../config.php";
class VoitureC {
function afficherVoiture ($voiture){
		echo "matricules: ".$voiture->getmMatricules()."<br>";
		echo "marque: ".$voiture->getMarque()."<br>";
		echo "couleurs: ".$voiture->getCouleurs()."<br>";
		echo "types: ".$voiture->getTypes()."<br>";
		echo "dates: ".$voiture->getDates()."<br>";
		echo "nb_places: ".$voiture->getNbplaces()."<br>";
		echo "pays: ".$voiture->getPays()."<br>";
	}
/*	function calculerSalaire($voiture){
		echo $voiture->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterVoiture($voiture){
		$sql="insert into voiture (matricules,marque,couleurs,types,dates,nb_places,pays) values (:matricules, :marque,:couleurs,:types,:dates,:nb_places,:pays)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $matricules=$voiture->getMatricules();
        $marque=$voiture->getMarque();
        $couleurs=$voiture->getCouleurs();
        $types=$voiture->getTypes();
        $dates=$voiture->getDates();
		$nb_places=$voiture->getNbplaces();
		$pays=$voiture->getPays();
		$req->bindValue(':matricules',$matricules);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':couleurs',$couleurs);
		$req->bindValue(':types',$types);
		$req->bindValue(':dates',$dates);
		$req->bindValue(':nb_places',$nb_places);
		$req->bindValue(':pays',$pays);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	function afficherVoitures(){
		//$sql="SElECT * From voiture e inner join formationphp.voiture a on e.matricules= a.matricules";
		$sql="SELECT * From voiture ORDER by dates";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerVoiture($matricules){
		$sql="DELETE FROM voiture where matricules= :matricules";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':matricules',$matricules);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierVoiture($voiture,$matricules){
		$sql="UPDATE voiture SET  marque=:marque,couleurs=:couleurs,types=:types,dates=:dates ,nb_places=:nb_places ,pays=:pays WHERE matricules=:matricules";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$matricules=$voiture->getMatricules();
        $marque=$voiture->getMarque();
        $couleurs=$voiture->getCouleurs();
        $types=$voiture->getTypes();
		$dates=$voiture->getDates();
        $nb_places=$voiture->getNbplaces();
		$pays=$voiture->getPays();
		$datas = array( ':matricules'=>$matricules, ':marque'=>$marque,':couleurs'=>$couleurs,':types'=>$types,':dates'=>$dates ,':nb_places'=>$nb_places ,' :pays'=>$pays);
		$req->bindValue(':matricules',$matricules);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':couleurs',$couleurs);
		$req->bindValue(':types',$types);
		$req->bindValue(':dates',$dates);
		$req->bindValue(':nb_places',$nb_places);
		$req->bindValue(':pays',$pays);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererVoiture($matricules){
		$sql="SELECT * from voiture where matricules=$matricules";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeVoitures($tarif){
		$sql="SELECT * from voiture where marque=$marque";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>
	