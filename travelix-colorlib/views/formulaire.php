
<?php
include "../core/ReservationC.php";

if (isset($_GET['matricules'])) {
    $voitureC = new voitureC();
    $result = $voitureC->recupererVoiture($_GET['matricules']);
    foreach ($result as $row) {
        $nb_places = $row['nb_places'];
        $marque = $row['marque'];
        $couleurs = $row['couleurs'];
        $types = $row['types'];
        $dates = $row['dates'];
        $matricules = $row['matricules'];
        $pays = $row['pays'];
    }
}
?>
<html>


<head>
	<meta charset="utf-8"/>
	<title>
		frini skander 
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div >
		<img src="images//" id="banner">
	</div>
	<div id="nav_bar">
		<ul>
			<li><a href="#">HOME</a></li>
			<li><a href="#">VOL</a></li>
			<li><a href="#">HOTEL</a></li>	
			<li><a href="#">VOITURE</a></li>
		</ul>
	</div>
          <form>
		<fieldset>
			<legend>
				Formulaire
			</legend>
		
		<hr width="100%" color="gray">
		<p class="legende">
			 A.<b><u>Voiture</u></b>
		</p>

		<table align="center">
			<tr>
				<td align="right">
					<label>LOCATION avec assurance : </label>
				</td>
				<td>
				<input id="lien" name="lien" type="radio" value /> oui
					<input id="lien" name="lien" type="radio"/>	non

				</td>
			</tr>

			<tr>
				<td align="right">
					<label>Votre Nom :</label>
				</td>
				<td>
					<input id="" type="text" placehoder=""/>	
				</td>
			</tr>

			<tr>
				<td align="right">
					<label> Votre Prenom:</label>
				</td>
				<td>
					<input id="" type="text" placehoder=""/>	
				</td>
			</tr>

			<tr>
				<td align="right">
					<label>Mail:</label>
				</td>
				<td>
					<input id="" type="mail" placehoder="Mail"/>	
				</td>
			</tr>
			<tr>
				<td align="right">
					<label>Pwd:</label>
				</td>
				<td>
					<input id="" type="text" placehoder="Mot de Passe"/>	
				</td>
			</tr>

			<tr>
				<td align="right">
					<label>MARQUE:</label>
				</td>
				<td >
					<select name="marque">
                        <option value="<?php echo $marque ?>"><?php echo $marque ?></option>

					</select>
				</td>
			</tr>
		</table>	

		<hr width="100%" color="gray">
		<p class="legende"> B.<b>Reservation de voiture </b></p>
		<table align="center">>
			<tr>
				<td>
					<label>durré de location:</label>
				</td>
				<td>
				<input type="date" />

				</td>
				<td>
					
				</td>
				<td>
				<input type="date" />

				</td>
			</tr>

			<tr>
				<td>
					<label>prix:</label>
				</td>
				<td>
					<input type="text"  value="<?php echo $pays ?>" readonly/>

				</td>

				<td>
					<label>couleur:</label>
					<select name="couleur">
						<option value="<?php echo $couleurs ?>"><?php echo $couleurs ?></option>

				</td>
				<td>
						

				</td>

				</td>
			</tr>

			<tr>
				<td>
					<label>type:</label>
				</td>
				<td>
					<select name="type">
						<option value="<?php echo $types; ?>"> <?php echo $types ;?></option>

					</select>				</td>
				<td>
					<label>		N=Nombre de place :<label>
				</td>
				<td>
					<input type="text" placeholder="" value="<?php echo $nb_places ;?>" readonly/>
					
				</td>
			</tr>
		</table> 
		<hr width="100%"/>
		<p class="legende">C.<b>Autres renseignements</b></p>
		<input type="text" size="50" placeholder="Saisir ici d'autres renseignements ">
		<br>
		<div align="center">
			<input type="submit" value="valider" placeholder="Saisir ici d'autres renseignements ">
			<input type="submit" value="recommencer" placeholder="Saisir ici d'autres renseignements ">
			<hr width="100%"/>
		</div>
		</fieldset>
	</form>












</body>
</html>