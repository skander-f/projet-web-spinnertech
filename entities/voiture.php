<?PHP
class voiture{
	private $matricules;
	private $marque;
	private $couleurs;
	private $types;
	private $dates;
	private $nb_places;
	private $pays;
	function __construct($matricules,$marque,$couleurs,$types,$dates,$nb_places,$pays){
		$this->matricules=$matricules;
		$this->marque=$marque;
		$this->couleurs=$couleurs;
		$this->types=$types;
		$this->dates=$dates;
		$this->nb_places=$nb_places;
		$this->pays=$pays;
	}
	
	function getMatricules(){
		return $this->matricules;
	}
	function getMarque(){
		return $this->marque;
	}
	function getCouleurs(){
		return $this->couleurs;
	}
	
	function getTypes(){
		return $this->types;
	}
	function getDates(){
		return $this->dates;
	}
	function getNbplaces(){
		return $this->nb_places;
	}
	function getPays(){
		return $this->pays;
	}

	function setMarque($marque){
		$this->marque=$marque;
	}
	function setCouleurs($couleurs){
		$this->couleurs;
	}
	function setTypes($types){
		$this->types=$types;
	}
	function setDates($dates){
		$this->dates=$dates;
	}
	function setNbplaces($nb_places){
		$this->nb_places=$nb_places;
	}
	
	function setPays($pays){
		$this->pays=$pays;
	
	
}
}
?>

