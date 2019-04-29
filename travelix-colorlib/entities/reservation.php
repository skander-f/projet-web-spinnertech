<?php





class reservation
{

    private $id;

    private $mail;

    private $marque;

    private $type;

    private $prix_v ;

    private $durre_location;

    private $couleur;

    private $nb_place;

    private $matricule ;

    private $dure_location ;

 public function __construct($id, $mail, $marque, $type, $prix_v, $durre_location, $couleur, $nb_place, $matricule , $dure_location)
 {
     $this->id = $id;
     $this->mail = $mail;
     $this->marque = $marque;
     $this->type = $type;
     $this->prix_v = $prix_v;
     $this->durre_location = $durre_location;
     $this->couleur = $couleur;
     $this->nb_place = $nb_place;
     $this->matricule = $matricule;
     $this->dure_location = $dure_location;


 }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getMail()
    {
        return $this->mail;
    }


    public function setMail($mail)
    {
        $this->mail = $mail;
    }


    public function getMarque()
    {
        return $this->marque;
    }


    public function setMarque($marque)
    {
        $this->marque = $marque;
    }


    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
    }


    public function getPrixV()
    {
        return $this->prix_v;
    }


    public function setPrixV($prix_v)
    {
        $this->prix_v = $prix_v;
    }


    public function getDurreLocation()
    {
        return $this->durre_location;
    }


    public function setDurreLocation($durre_location)
    {
        $this->durre_location = $durre_location;
    }


    public function getCouleur()
    {
        return $this->couleur;
    }


    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }


    public function getNbPlace()
    {
        return $this->nb_place;
    }


    public function setNbPlace($nb_place)
    {
        $this->nb_place = $nb_place;
    }


    public function getMatricule()
    {
        return $this->matricule;
    }


    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

     public function getDureLocation()
 {
     return $this->dure_location;
 }


     public function setDureLocation($dure_location)
 {
     $this->dure__location = $dure_location;
 }


}





    ?>






