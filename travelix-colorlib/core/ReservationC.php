<?php

include "../config.php";
class ReservationC
{
    function afficherreservation($reservation)
    {
        echo "id: " . $reservation->getId() . "<br>";
        echo "mail: " . $reservation->getMail() . "<br>";
        echo "marque: " . $reservation->getMarque() . "<br>";
        echo "type: " . $reservation->getType() . "<br>";
        echo "prix_v: " . $reservation->getPrix_v() . "<br>";
        echo "durre_location: " . $reservation->getDurreLocation() . "<br>";
        echo "couleur: " . $reservation->getCouleur() . "<br>";
        echo "nb_places: " . $reservation->getNb_places() . "<br>";

    }

    function ajouterreservation($reservation)
    {
        $sql = "insert into reservation (mail,marque,type,prix_v,durre_location,couleur,nb_places,matriculev ,dure_location ) values (:mail,:marque,:type,:prix_v,:durre_location,:couleur,
		:nb_places,:matriculev ,:dure_location )";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $mail = $reservation->getMail();
            $marque = $reservation->getMarque();
            $type = $reservation->getType();
            $prix_v = $reservation->getPrixV();
            $durre_location = $reservation->getDurreLocation();
            $couleur = $reservation->getCouleur();
            $nb_places = $reservation-> getNbPlace();
            $matriculev = $reservation->getMatricule();
            $dure_location = $reservation->getDureLocation();



            $req->bindValue(':mail', $mail);
            $req->bindValue(':marque', $marque);
            $req->bindValue(':type', $type);
            $req->bindValue(':prix_v', $prix_v);

            $req->bindValue(':durre_location', $durre_location);
            $req->bindValue(':couleur', $couleur);
            $req->bindValue(':nb_places', $nb_places);
            $req->bindValue(':matriculev', $matriculev);
            $req->bindValue(':dure_location', $dure_location);


            $req->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();


        }
    }

    function supprimerreservation($id){
        $sql="DELETE FROM reservation where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    function modifierreservation($reservation,$id){
        $sql="UPDATE reservation SET id=:idd, mail=:mail,marque=:marque,type=:type,prix_v=:prix_v,durre_location=:durre_location,couleur=:couleur,nb_places=:nb_places,dure_location=dure_location  WHERE id=:id";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
            $req=$db->prepare($sql);
            $idd=$reservation->getid();

            $mail=$reservation->getmail();
            $marque=$reservation->getmarque();
            $type= $reservation->gettype();
            $prix_v=$reservation->getprix_v();
            $durre_location= $reservation->getdurre_location();
            $couleur=$reservation->getcouleur();
            $nb_places=$reservation->getnb_places();
            $dure_location= $reservation->getdure_location();



            $datas = array(':idd'=>$idd, ':id'=>$id, ':mail'=>$mail,':marque'=>$marque,':type'=>$type,':prix_v'=>$prix_v,
                ':durre_location'=>$durre_location,':couleur'=>$couleur,':nb_places'=>$nb_places);
                $req->bindValue(':idd',$idd);
            $req->bindValue(':id',$id);

            $req->bindValue(':mail',$mail);
            $req->bindValue(':marque',$marque);
            $req->bindValue(':type',$type);
            $req->bindValue(':prix_v',$prix_v);

            $req->bindValue(':durre_location',$durre_location);
            $req->bindValue(':couleur',$couleur);
            $req->bindValue(':nb_places',$nb_places);



            $s=$req->execute();

            // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }

    }
}


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

        $sql="SELECT * from voiture where matricules='$matricules'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function rechercherListeVoitures($marque){
        $sql="SELECT * from voiture where marque='$marque'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function rechercherselonprix($prix){
        $sql="SELECT * from voiture where pays='$prix'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function rechercherselonmarqueprix($marque,$prix){
        $sql="SELECT * from voiture where marque='$marque' and pays='$prix'";
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

































}