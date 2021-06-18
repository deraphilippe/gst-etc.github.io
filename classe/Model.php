<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
::-webkit-scrollbar
{
	width: 10px;
}
::-webkit-scrollbar-thumb
{
	background: linear-gradient(transparent,orange);
	border-radius: 5px;
}
::-webkit-scrollbar-thumb:hover
{
	background: linear-gradient(transparent,red);
}
    table
    {
    	background-color: yellow;
    }
    #bouts
    {
    	border-radius: 2px;
    	margin-right: 2px;
    	margin-left: 2px;
    	padding: 5px;
    }
    #boutSup
    {
    	text-decoration: none;
    	color: white;
    	background-color: red;
    	margin-right: 2px;
    	margin-left: 2px;
    	padding: 5px;
    }
    #boutMention
    {
    	text-decoration: none;
    	color: white;
    	background-color: blue;
    	margin-right: 2px;
    	margin-left: 2px;
    	padding: 5px;
    }
    #boutModif
    {
    	text-decoration: none;
    	color: white;
    	background-color: green;
    	margin-right: 2px;
    	margin-left: 2px;
    	padding: 5px;
    }
	th
	{
		background-color: black;
		color: white;
		font-family: "Calibri";
		padding-right: 25px;
    	padding-left: 25px;
	}
	td
	{
		font-family: "Calibri";	
		text-align: center;
	}
	pre
	{
		font-family: "Calibri";	
	}
	tr:hover
	{
		background-color: rgba(192,191,192,0.5);
		color: black;
		cursor: pointer;
		border-color: black;
		border-bottom:1px black solid;
	}
	#img
	{
		border-radius: 20px;
		width: 45px;
		height: 38px;
		float: center;
	}
	#img:hover
	{
		background-color: rgba(192,191,192,0.5);
	}
</style>
</head>
<body>
<?php 
class Model{
	private $droit="";
	private $database;
	public function __construct($dr){
		$this->droit=$dr;
	}
	private function compter($query){
		$result=$this->database->query($query);
		$data=$result->fetch();
		return $data["nbr"];
	}
	private function date($date){
		$tab=explode("-", $date);
		$date_frc="";
		if ($tab[0]!="" && $tab[0]!="0000") {
			$date_frc=$tab[2]."-".$tab[1]."-".$tab[0];
		}
		if($tab[2]=="00" && $tab[1]=="00"){
			$date_frc=$tab[0];
		}
		if ($tab[0]=="0000") {
			$date_frc="";
		}
		return $date_frc;
	}
	private function ifDate($elt,$data){
		if (substr($elt,0,4)=="date") {
			$data=$this->date($data);
		}
		return $data;
	}
	private function getDeclaration_naissance($numNaiss){
		$result=$this->database->prepare("SELECT d.*, p.* from declarerNaiss d, personne p where d.numNaiss=:numNaiss and p.numPers=d.numPers");
		$result->execute(array('numNaiss' => $numNaiss, ));
		$data=$result->fetch();
		return "Declarant: ".$data["nomPers"]." ".$data["prenomPers"].", naissance: ".$data["dateNaissPers"]." à ".$data["lieuNaissPers"].", ".$data["profPers"]."\n Date declaration: ".$data["dateDecNaiss"]." ".$data["heureDecNaiss"];
	}
	private function getDeclaration_deces($numDeces){
		$result=$this->database->prepare("SELECT d.*, p.* from declarerDeces d, personne p where d.numDeces=:numDeces and p.numPers=d.numPers");
		$result->execute(array('numDeces' => $numDeces, ));
		$data=$result->fetch();
		return "Declarant: ".$data["nomPers"]." ".$data["prenomPers"].", naissance: ".$data["dateNaissPers"]." à ".$data["lieuNaissPers"].", ".$data["profPers"]."\n Date declaration: ".$data["dateDecDeces"]." ".$data["heureDecDeces"];
	}
	private function get_Juge_Greffier($numJugement){
		$result=$this->database->prepare("SELECT jg.nomJuge, jg.nomGreffier from jugeGreffier jg, jugeSortir j where j.numJugement=:numJugement and j.numJuge=jg.numJuge");
		$result->execute(array('numJugement' => $numJugement ));
		$data=$result->fetch();
		return "Juge: ".$data["nomJuge"]."\nGreffier:".$data["nomGreffier"];
	}
	private function getJugement_deces($numDeces){
		$result=$this->database->prepare("SELECT j.* from concernerJugement e, jugement j where e.numDeces=:numDeces and e.numJugement=j.numJugement");
		$result->execute(array('numDeces' => $numDeces ));
		$data=$result->fetch();
		return "N°jugement: ".$data["numJugement"].", Date jugement:".$data["dateJugement"]."\n Date reception:".$this->vide($data["dateReception"]).", Date enregistrement:".$data["dateEnregistre"]."\n".$this->get_Juge_Greffier($data["numJugement"]);		  
	}
	private function getJugement_naissance($numNaiss){
		$result=$this->database->prepare("SELECT * from jugementnaissance where numNaiss=:numNaiss");
		$result->execute(array('numNaiss' => $numNaiss ));
		$data=$result->fetch();
		return "N°jugement: ".$data["numJugement"].", Date jugement:".$data["dateJugement"]."\n Date reception:".$this->vide($data["dateReception"]).", Date enregistrement:".$data["dateEnregistre"].$data["origineJugement"];		  
	}
	private function vide($date){
		$str="";
		if ($date!="0000-00-00") {
			$str=$date;
		}
		return $str;
	}
	public function setModelNaissance($query){
		$attr=array("numActeNaiss","legitime","nomEnfant","prenomEnfant","sexeEnfant","dateNaissEnfant","heureNaissEnfant","lieuNaissEnfant","nomPere","dateNaissPere","lieuNaissPere","adrPere","profPere","agePere","nomMere","dateNaissMere","lieuNaissMere","adrMere","profMere","ageMere","nomOff");
		$titre=array("Impression/Image","N°acte","légitimité","Nom de l'enfant","Prénom de l'enfant","Sexe","Date de naissance(enfant)","Heure de naissance","Lieu de naissance","Nom père","Date de naissance(père)","Lieu de naissance(père)","Adresse(père)","Profession(père)","Age(père)","Nom mère","Date de naissance(mère)","Lieu de naissance(mère)","Adresse(mère)","Profession(mère)","Age(mère)","Officier","Information complementaire","Action");
		$this->etablish_connexion();
		echo "<table> <tr>";
		foreach ($titre as $elt) { 
		    echo "<th>".$elt."</th>"; 
		} 
		echo "</tr>";
		$result=$this->database->query($query);
		while ($data=$result->fetch()) {
			$info="";
			$type=$data['typeNaiss'];
			if ($data['typeNaiss']=="declaration"){
				$url="acte_naissance.php?numNaiss=".$data['numNaiss'];
				$info=$this->getDeclaration_naissance($data['numNaiss']);
			}			
			else if($data['typeNaiss']=="jugement"){
				$url="acte_jugement.php?numNaiss=".$data['numNaiss'];
				$info=$this->getJugement_naissance($data['numNaiss']);
			}
			echo "<tr> 
			        <td>
				        <a href=".$url."><img id='img' src='image/imprimer.jpg'></a>
				    
				        <a href=display_image.php?num=".$data['numNaiss']."&acte=Naiss&table=naissance><img src='image/image.png'></a>
				    </td>";
			foreach ($attr as $elt) {
				if (($type=="jugement" && $elt=="heureNaissEnfant") || (substr($elt, 0,3)=="age" && $data[$elt]=="0")){
					echo "<td></td>";
				}
				else{
					echo "<td>".$this->ifDate($elt,$data[$elt])."</td>";
				}
			}
			echo "<td><pre>".$info."</pre></td>
			     <td ><a id='boutMention' href='mention.php?numNaiss=".$data['numNaiss']."'>Mention</a>";
			if ($this->droit=="oui") {
				echo "<a id='boutModif' href='form_naissance.php?numNaiss=".$data['numNaiss']."'>Modifier
			     </a>";
			}
			echo "</td>
			     </tr>";
	    } 
		echo "</table>"; 
	}
	public function setModelReconnaissance($query){
		$attr_pere=array("nomPers","prenomPers","dateNaissPers","lieuNaissPers","adressePers","profPers","dateRec","heureRec","nomOff");
		$attr_enf=array("nomEnfant","prenomEnfant","sexeEnfant","dateNaissEnfant","lieuNaissEnfant","nomMere");
		$titre=array("Impression/Image","N°Acte","Nom père","Prénom père","Date de naissance(père)","Lieu de naissance(père)","Adresse(père)","Profession(père)","Date reconnaissance","Heure reconnaissance","Officier","Nom de l'enfant","Prénom de l'enfant","Sexe","Date de naissance(enfant)","Lieu de naissance","Nom mère","Action");
		$this->etablish_connexion();
		echo "<table>
			 <tr>";
		foreach ($titre as $elt) {
			echo "<th>".$elt."</th>";
		} 
	    echo "</tr>";
		$result=$this->database->query($query);
		$av="";
		while ($data=$result->fetch()) {
			echo "<tr>";
			$query="SELECT count(numRec) as nbr FROM acteReconnaissance WHERE numRec='".$data['numRec']."'";
			$cpt=$this->compter($query);
			if($data["numActeRec"]!=$av) {
				$av=$data["numActeRec"];
				echo "<td rowspan='".$cpt."'> 
					<a href='choix.php?numRec=".$data["numRec"]."&type=reconnaissance&nbr=".$cpt."&nomEnfant=".$data["nomEnfant"]."&prenomEnfant=".$data["prenomEnfant"]."'><img id='img' src='image/imprimer.jpg'></a> 
				        <a href=display_image.php?num=".$data['numRec']."&acte=Rec&table=reconnaissance><img src='image/image.png'></a>
				      </td>";
				echo "<td rowspan=".$cpt.">".$av."</td>";
				foreach ($attr_pere as $pere) {
					echo "<td rowspan=".$cpt.">".$this->ifDate($pere,$data[$pere])."</td>";
				}
			}
			foreach ($attr_enf as $elt) {
				echo "<td>".$this->ifDate($elt,$data[$elt])."</td>";
			}
			echo "<td>";
			if ($this->droit=="oui") {
				echo "<a id='boutModif' href='form_reconnaissance.php?nbr=".$cpt."&numRec=".$data['numRec']."&numPere=".$data['numPers']."&nbr=".$cpt."'>Modifier
			     </a>";
			}
			echo "</tr>";
		}
	}
	public function setModelAdoption($query){
		$attr_adoptant=array("nomAdoptant","dateAdoptant","lieuAdoptant","adrAdoptant","profAdoptant","pereAdoptant","mereAdoptant","nomTem1","dateTem1","lieuTem1","adrTem1","profTem1","nomTem2","dateTem2","lieuTem2","adrTem2","profTem2","dateAdopt","heureAdopt","dateEcrit","nomOff");
		$attr_enf=array("nomEnfant","prenomEnfant","sexeEnfant","dateNaissEnfant","lieuNaissEnfant","nomPere","nomMere");
		$titre=array("Impression/Image","N°Acte","Nom d'aldoptant","Date de naissance(adoptant)","Lieu de naissance(adoptant)","Adresse(adoptant)","Profession(adoptant)","Père de l'adoptant","Mère de l'adoptant","Nom du témoin n°1","Date de naissance(temoin n°1)","Lieu de naissance(temoin n°1)","Adresse(temoin n°1)","Profession(temoin n°1)","Nom du temoin n°2","Date de naissance(temoin n°2)","Lieu de naissance(temoin n°2)","Adresse(temoin n°2)","Profession(temoin n°2)","date d'adoption","heure d'adoption","date jugement","Officier","Nom de l'enfant","Prénom de l'enfant","Sexe","Date de naissance(enfant)","Lieu de naissance","Mère de l'adopté","Père de l'adopté","Action");
		$this->etablish_connexion();
		echo "<table>
			 <tr>";
		foreach ($titre as $elt) {
			echo "<th>".$elt."</th>";
		} 
	    echo "</tr>";
		$result=$this->database->query($query);
		$av="";
		while ($data=$result->fetch()) {
			echo "<tr>";
			$query="SELECT count(numAdopt) as nbr FROM acteAdoption WHERE numAdopt='".$data['numAdopt']."'";
			$cpt=$this->compter($query);
			if($data["numActeAdopt"]!=$av) {
				$av=$data["numActeAdopt"];
				echo "<td rowspan='".$cpt."'> 
					<a href='choix.php?numAdopt=".$data["numAdopt"]."&type=adoption&nbr=".$cpt."&nomEnfant=".$data["nomEnfant"]."&prenomEnfant=".$data["prenomEnfant"]."'><img id='img' src='image/imprimer.jpg'></a><a href=display_image.php?num=".$data['numAdopt']."&acte=Adopt&table=adoption><img src='image/image.png'></a>
				</td>
				<td rowspan=".$cpt.">".$av."</td>";
				foreach ($attr_adoptant as $pere) {
					echo "<td rowspan=".$cpt.">".$this->ifDate($pere,$data[$pere])."</td>";
				}
			}
			foreach ($attr_enf as $elt) {
				echo "<td>".$this->ifDate($elt,$data[$elt])."</td>";
			}
			echo "<td>";
			if ($this->droit=="oui") {
				echo "<a id='boutModif' href='form_adoption.php?nbr=".$cpt."&numAdopt=".$data['numAdopt']."&numPers=".$data['numPers']."'>Modifier
			        </a>";
			};
			echo "</td></tr>";
		}
	}
		public function setModelDeces($query){
		$attr=array("numActeDeces","nomDeces","sexeDecedes","dateNaissDeces","lieuNaissDeces","adrDeces","profDeces","nomPere","nomMere","dateDeces","heureDeces","lieuDeces","nomOff");
		$titre=array("Impression/Image","N°Acte","Nom du défunt","Sexe","Date de naissance(défunt)","Lieu de naissance(défunt)","Domicile(défunt)","Profession(défunt)","Père du défunt","Mère du défunt","Date du décès","Heure du décès","Lieu du déces","Officier","Information complementaire","Action");
		$this->etablish_connexion();
		echo "<table>
			 <tr>";
		foreach ($titre as $elt) {
			echo "<th>".$elt."</th>";
		} 
	    echo "</tr>";
		$result=$this->database->query($query);
		while ($data=$result->fetch()) {
			$info="";
			$type=$data['typeDec'];
			if ($type=="declaration"){
				$info=$this->getDeclaration_deces($data['numDeces']);
			}			
			else{
				$info=$this->getJugement_deces($data['numDeces']);
			}
			$url="acte_deces.php?numDeces=".$data['numDeces'];
			echo "<tr> 
			        <td>
				        <a href=".$url."><img id='img' src='image/imprimer.jpg'></a>
				        <a href=display_image.php?num=".$data['numDeces']."&acte=Dec&table=deces><img src='image/image.png'></a>
				      </td>";
			foreach ($attr as $elt) {
				if ($type=="jugement" && $elt=="heureDeces") {
					echo "<td></td>";
				}
				else{
					echo "<td>".$this->ifDate($elt,$data[$elt])."</td>";
				}
			}
			echo "<td><pre>".$info."</pre></td>
			     <td>";
			if ($this->droit=="oui") {
				echo "<a id='boutModif' href='form_deces.php?numDec=".$data['numDeces']."'>Modifier
			     </a>";
			}			     
			echo "</td>
			     </tr>";
	    } 
		echo "</table>"; 
	}
	public function setModelMariage($query){
		$attr=array("numActeMariage","dateMariage","heureMariage","nomOff","nomHommeComplet","dateNaissHomme","lieuNaissHomme","adrHomme","profHomme","nationalHomme","nomPereHommeComplet","dateNaissPereHomme","lieuNaissPereHomme","adrPereHomme","profPereHomme","vivPereHomme","nomMereHommeComplet","dateNaissMereHomme","lieuNaissMereHomme","adrMereHomme","profMereHomme","vivMereHomme","nomFemmeComplet","dateNaissFemme","lieuNaissFemme","adrFemme","profFemme","nationalFemme","nomPereFemmeComplet","dateNaissPereFemme","lieuNaissPereFemme","adrPereFemme","profPereFemme","vivPereFemme","nomMereFemmeComplet","dateNaissMereFemme","lieuNaissMereFemme","adrMereFemme","profMereFemme","vivMereFemme","nomTem1Complet","dateNaissTem1","lieuNaissTem1","adrTem1","profTem1","nomTem2Complet","dateNaissTem2","lieuNaissTem2","adrTem2","profTem2");
		$titre=array("Impression/Image","N°acte","Date du mariage","Heure du mariage","Officier","Nom du marié","Date de naissance(marié)","Lieu de naissance(marié)","Adresse(marié)","Profession(marié)","Nationalité(marié)","Nom du père(marié)","Date de naissance du père(marié)","Lieu de naissance du père(marié)","Adresse du père(marié)","Profession du père(marié)","vivant(père marié)","Nom de la mère(marié)","Date de naissance de la mère(marié)","Lieu de naissance de la mère(marié)","Adresse de la mère(marié)","Profession de la mère(marié)","vivant(mère marié)","Nom de la femme","Date de naissance(femme)","Lieu de naissance(femme)","Adresse(femme)","Profession(femme)","Nationalité(femme)","Nom du père(femme)","Date de naissance du père(femme)","Lieu de naissance du père(femme)","Adresse du père(femme)","Profession du père(femme)","vivant(père femme)","Nom de la mère(femme)","Date de naissance de la mère(femme)","Lieu de naissance de la mère(femme)","Adresse de la mère(femme)","Profession de la mère(femme)","vivant(mère femme)","Nom du 1e témoin","Date de naissance(1e témoin)","Lieu de naissance(1e témoin)","Adresse(1e témoin)","Profession(1e témoin)","Nom du 2e témoin","Date de naissance(2e témoin)","Lieu de naissance(2e témoin)","Adresse(2e témoin)","Profession(2e témoin)","Autre information(marié)","Autre information(femme)","Action");
		$this->etablish_connexion();
		echo "<table> <tr>";
		foreach ($titre as $elt) { 
		    echo "<th>".$elt."</th>"; 
		} 
		echo "</tr>";
		$result=$this->database->query($query);
		while ($data=$result->fetch()) {
			echo "<tr> 
			        <td>
				        <a href='acte_mariage.php?numMariage=".$data['numMariage']."'><img id='img' src='image/imprimer.jpg'></a>
				        <a href=display_image.php?num=".$data['numMariage']."&acte=Mar&table=mariage><img src='image/image.png'></a>
				      </td>";
			foreach ($attr as $elt) {
				echo "<td>".$this->ifDate($elt,$data[$elt])."</td>";
			}
			echo "<td>".$this->get_etat_matrimonial($data['numHomme'],$data['dateMariage']).$this->get_jugement_mariage($data['numHomme'])."</td>";
			echo "<td>".$this->get_etat_matrimonial($data['numFemme'],$data['dateMariage']).$this->get_jugement_mariage($data['numFemme'])."</td>";
			echo "<td >";
			if ($this->droit=="oui") {
				echo "<a id='boutModif' href='form_mariage.php?numMariage=".$data['numMariage']."'>Modifier
			     </a>";
			}
			echo "</td>
			     </tr>";
	    }

		echo "</table>"; 
	}
	public function etablish_connexion(){
		$this->database=new PDO("mysql: host=localhost; dbname=etatCivil","root","");
	}
	public function setModelSimple($query, $attr, $titre){
		$this->etablish_connexion();
		echo "<table>
			  <tr>";
		foreach ($titre as $elt) {
		    echo "<th>".$elt."</th>";
		}
		echo "</tr>";
		$result=$this->database->query($query);
		while ($data=$result->fetch()) {
			echo "<tr>";
		    foreach ($attr as $elt) {
			    echo "<td>".$data[$elt]."</td>";	    
			}
			if ($this->droit=="oui") {
				echo "<td id='bouts'><a id='boutSup' href='supprimer.php?".$attr[0]."=".$data[$attr[0]]."'>Supprimer
			     </a></td>";
			}
			echo "</tr>";
		}
		echo "</table>"; 
	} 
	public function setModelOfficier($query, $attr, $titre){
		$this->etablish_connexion();
		echo "<table>
			  <tr>";
		foreach ($titre as $elt) {
		    echo "<th>".$elt."</th>";
		}
		echo "</tr>";
		$result=$this->database->query($query);
		while ($data=$result->fetch()) {
			echo "<tr>";
		    foreach ($attr as $elt) {
			    echo "<td>".$data[$elt]."</td>";	    
			}
			if ($this->droit=="oui") {
				echo "<td id='bouts'><a id='boutSup' href='supprimer.php?".$attr[0]."=".$data[$attr[0]]."'>Supprimer
			     </a></td> <td id='bouts'><a id='boutModif' href='registre_officier.php?numOff=".$data["numOff"]."'>Modifier
			     </a></td>";
			}
			echo "</tr>";
		}
		echo "</table>"; 
	} 
	public function get_etat_matrimonial($numPers,$dateMariage){
		$sitMat="marié";
		$result=$this->database->query("SELECT description FROM situation_matrimoniale WHERE codeSit='".$numPers."-".$dateMariage."'");
		while ($data=$result->fetch()) {
			$sitMat="Etat matrimoniale:".$data['description'].". ";
		}
		return $sitMat;
	}
	public function get_jugement_mariage($numPers){
		$jugement="";
		$result=$this->database->query("SELECT * FROM naissance_jugement WHERE numPers=".$numPers);
		while ($data=$result->fetch()) {
			$jugement="Copie jugement: N°".$data["numActeJug"]." en ".$data["dateJug"].".";
		}
		return $jugement;
	}
}
?>
</body>
	<script>
	</script>
</html>
