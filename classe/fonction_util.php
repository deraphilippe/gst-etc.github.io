<?php
$database=new PDO("mysql: host=localhost; dbname=etatCivil","root","");
$datetime=new FormatDatetime();
$alphabet="abcdefghijklmnopqrstuvwxyz ";
$alphabet=strtoupper($alphabet);
$list_alphabet=array();
for ($i=0; $i <strlen($alphabet) ; $i++) { 
	$list_alphabet[$alphabet[$i]]=$i+1;
}
function getSP($sexe, $prof){
	$str="";
	if ($sexe=="inconnu") {
		$str=ifExiste($prof,$prof);
	}
	else{
		$str=$sexe.ifExiste($prof,", ".$prof);
	}
	return $str;
}
function the_object($object){
	$new_object=Stripspace($object);
	if (preg_match("#!#", $object)) {
		$new_object=decoupage($object);
		$new_object=substr($new_object,0, strlen($new_object)-1);
	}
	return $new_object;
}
function decoupage($object){
	$array=explode(" ", $object);
	$new_object=" ";
	foreach ($array as $elt) {
		if (!empty($elt) && $elt[0]=='!') {
			$new_object.="<span style='font-weight: bold' id='romain'>".substr($elt, 1)."</span>";
		}
		else{
			$new_object.=$elt;
		}
		$new_object.=" ";
	}
	return $new_object;
}
function ajout_situation($numPers,$description,$dateMariage){
	global $database;
	$result=$database->prepare("INSERT INTO situation_matrimoniale(codeSit,description,numPers) VALUES(:codeSit,:description,:numPers)");
	$result->execute(array(
		'codeSit' =>$numPers."-".$dateMariage,
		'description' =>$description,
		'numPers' =>$numPers
	));	
}
function modif_situation($numPers,$description,$dateMariage,$lastDateMariage){
	global $database;
	$donne="";
	$result=$database->prepare("SELECT numPers FROM situation_matrimoniale WHERE numPers=:numPers");
	$result->execute(array('numPers' => $numPers ));
	while ($data=$result->fetch()) { 
		$donne=$data["numPers"];
	}
	if ($donne=="") {
		ajout_situation($numPers,$description,$dateMariage);
	}
	else{
		$result=$database->prepare("UPDATE situation_matrimoniale SET codeSit=:codeSit WHERE codeSit=:last");
	    $result->execute(array(
		'codeSit' =>$numPers."-".$dateMariage,
		'last' =>$numPers."-".$lastDateMariage
	    ));	
	    $result=$database->prepare("UPDATE situation_matrimoniale SET description=:description WHERE codeSit=:codeSit");
	    $result->execute(array(
		'description' =>$description,
		'codeSit' =>$numPers."-".$dateMariage
	    ));	
	}
}
function modif_jugement_naissance($numPers,$numActe,$date){
	global $database;
	$donne="";
	$result=$database->prepare("SELECT numPers FROM naissance_jugement WHERE numPers=:numPers");
	$result->execute(array('numPers' => $numPers ));
	while ($data=$result->fetch()) { 
		$donne=$data["numPers"];
	}
	if ($donne=="") {
		ajout_naissance_jugement($numPers,$numActe,$date);
	}
	else{
		$result=$database->prepare("UPDATE naissance_jugement SET numActeJug=:numActeJug, dateJug=:dateJug WHERE numPers=:numPers");
	    $result->execute(array(
		'numActeJug' =>$numActe,
		'dateJug' =>$date,
		'numPers' =>$numPers
	    ));	
	}
}
function ajout_naissance_jugement($numPers,$numActe,$date){
	global $database;
	$result=$database->prepare("INSERT INTO naissance_jugement(numJug,numActeJug,dateJug,numPers) VALUES(:numJug,:numActeJug,:dateJug,:numPers)");
	$result->execute(array(
		'numJug' =>0,
		'numActeJug' =>$numActe,
		'dateJug' => $date,
		'numPers' => $numPers
	));	
}
function modif_autorisation($numPers,$dateMariage,$lastDateMariage,$codeAuto,$dateAuto,$donneur){
	global $database;
	$confirm=select_autorisation($database,$numPers."-".$lastDateMariage);
	if ($confirm=="") {
		ajout_autorisation($numPers,$dateMariage,$codeAuto,$dateAuto,$donneur);
	}
	else{
		$result=$database->prepare("UPDATE autorisation SET idAuto=:idAuto WHERE idAuto=:last");
		$result->execute(array(
		'idAuto' =>$numPers."-".$dateMariage,
		'last' =>$numPers."-".$lastDateMariage
	    ));	
	    $result=$database->prepare("UPDATE autorisation SET codeAuto=:codeAuto, dateAuto=:dateAuto, donneur=:donneur WHERE idAuto=:idAuto");
	    $result->execute(array(
		'codeAuto' =>$codeAuto,
		'dateAuto' =>$dateAuto,
		'donneur' =>$donneur,
		'idAuto'=>$numPers."-".$dateMariage
	    ));
	}    	
}
function ajout_autorisation($numPers,$dateMariage,$codeAuto,$dateAuto,$donneur){
	global $database;
	$result=$database->prepare("INSERT INTO autorisation(idAuto,codeAuto,dateAuto,donneur,numPers) VALUES(:idAuto,:codeAuto,:dateAuto,:donneur,:numPers)");
	$result->execute(array(
		'idAuto' =>$numPers."-".$dateMariage,
		'codeAuto' =>$codeAuto ,
		'dateAuto' =>$dateAuto,
		'donneur' =>$donneur,
		'numPers' =>$numPers
	));
}
function deleteAutorisation($idAuto){
	global $database;
	$result=$database->prepare("DELETE FROM autorisation WHERE idAuto=:idAuto");
	$result->execute(array('idAuto' => $idAuto));
}
function deleteCopieJugement($numPers){
	global $database;
	$result=$database->prepare("DELETE FROM naissance_jugement WHERE numPers=:numPers");
	$result->execute(array('numPers' => $numPers));
}
function deleteSituation($codeSit){
	global $database;
	$result=$database->prepare("DELETE FROM situation_matrimoniale WHERE codeSit=:codeSit");
	$result->execute(array('codeSit' => $codeSit));
}
function cryptage($nom, $user){
	global $list_alphabet;
	$nom=substr($nom, 0,5);
	$newValue="";
	for ($i=0; $i <strlen($nom) ; $i++){
		$newValue.=$list_alphabet[strtoupper($user[$i])]-$list_alphabet[strtoupper($nom[$i])]." ";
	}
	return $newValue;
}
function temps(){
	global $database;
	$res=$database->query("SELECT time(now()) as time");
    $data=$res->fetch();
	return $data["time"];

}
function off($date){
	$list=explode("-", $date);
	$value=", mpiandraikitra sora-piankohonana ao Ambalavao, rehefa novakiana taminy ity soratra ity.";
	if ($list[1]=="1961") {	
	    $value=", misolo ny mpanoratra fiankononana ao amin'ny Kaominina Ambalavao."; 
	}
	return $value;
}
function Stripspace($nom){
	if (!empty($nom) && $nom[-1]==" ") {
		$nom=trim($nom);
	}
	return $nom;
}
function getPersonne($nom, $dateNaiss, $lieuNaiss, $autre, $age){
	global $datetime;
	$str="";
	if($nom!=" "){
		$str=the_object(Stripspace($nom)).ifExiste($autre,", ".the_object($autre));
		if ($age!=0) {
			$str.=ifExiste($lieuNaiss,", teraka tao ".the_object($lieuNaiss)).", ".$datetime->getStringAge($age);
		}
		else{
			if ($lieuNaiss=="" && $dateNaiss!="-00-00") {
				$str.=", teraka tamin'ny ".$datetime->getStringDate($dateNaiss);
			}
			else if ($lieuNaiss!="" && $dateNaiss!="-00-00") {
				$str.=", teraka ".ifExiste($lieuNaiss," tao ".the_object($lieuNaiss).", ")."tamin'ny ".$datetime->getStringDate($dateNaiss);
			}
		}
	}
	if ($nom==" ") {
		$str="";
	}
	return $str;
}

function setAdresseParent($valide,$string1,$string2){
	$str="";
	if ($string1==$string2 && $valide==true) {
		$str=", samy monina ao ".the_object($string1);
	}
	else if($string1!=$string2){
		$str=", monina ao ".the_object($string1);
	}
	return $str;
}
function setVivant($valide,$viv1,$viv2){
	$str="";
	if ($viv1==$viv2 && $viv1=="non" && $valide==true) {
		$str=", samy efa maty";
	}
	else if ($viv1!=$viv2 && $viv1=="non") {
		$str=", efa maty";
	}
	return $str;
}
function officier($nomOff){
	$array=explode(" ",$nomOff);
	return $array[0];
}
function heureDec($datetime,$heure){
	$h="";
	if ($heure!="00:00:00") {
		$h=", tamin'ny ".$datetime->getStringTime($heure).", ";
	}
	return $h;
}
function modif_jugement($lastnum,$numJugement,$dateJugement,$dateReception,$dateEnregistre){
	global $database;
	$result=$database->prepare("UPDATE jugement SET numJugement=:numJugement, dateJugement=:dateJugement, dateReception=:dateReception, dateEnregistre=:dateEnregistre WHERE numJugement=:lastnum");
	$result->execute(array(
		'dateJugement' =>$dateJugement,
		'dateReception' =>$dateReception,
		'dateEnregistre' =>$dateEnregistre,
		'numJugement' =>$numJugement,
		'lastnum' =>$lastnum
	));	
}
function modif_nationalite($numPers,$nationalite){
	global $database;
	$result=$database->prepare("UPDATE personne SET nationalite=:nationalite WHERE numPers=:numPers");
	$result->execute(array(
		'nationalite' =>$nationalite,
		'numPers' =>$numPers
	));	
}
function voyelle($voy){
	$confirm=false;
	if ($voy=="a" || $voy=="e" || $voy=="i" || $voy=="o" || $voy=="u") {
		$confirm=true;
	}
	return $confirm;
}
function ctrlSTR($str){
	if ((strlen($str))>20){
		$div=intval(ceil((3*strlen($str))/4)-2);
	    while(!voyelle($str[$div])){
	    	$div-=1;
	    }
	    $div-=1;
		echo "<span id='ctrl'>".the_object(substr($str, 0,$div))."-</span><br/>";
		echo "<span id='ctrl'>".the_object(substr($str, $div))."</span>";
	}
	else{
		echo "<span id='ctrl'>".the_object($str)."</span>";
	}
}
function set_autorisation($database,$array,$idAuto){
	$attr_auto=array("codeAuto","dateAuto","donneur");
	$result=$database->query("SELECT * FROM autorisation WHERE idAuto='".$idAuto."'");
	while ($sub_data=$result->fetch()) {
	    for ($i=0; $i <3 ; $i++) {
		?>
		    <input type='hidden' name="<?php echo $array[$i]; ?>" value="<?php echo $sub_data[$attr_auto[$i]]; ?>">
	    <?php
	    }
	}
}
function select_autorisation($database,$idAuto){
	$donne="";
	$result=$database->prepare("SELECT idAuto FROM autorisation WHERE idAuto=:idAuto");
	$result->execute(array('idAuto' => $idAuto ));
	while ($data=$result->fetch()) { 
		$donne=$data["idAuto"];
	}
	return $donne;
}
function set_age($age){
	$str="";
	if ($age!="0") {
		$str=", ".$age." taona,";
	}
	return $str;
}
function parent($nomParent){
	$parent="";
	if ($nomParent!=" ") {
		$parent=$nomParent;
	}
	return $parent;
}
function parent_personne($mere,$pere){
	$parent=$mere;
	if ($pere!=""){
		$parent=$pere." sy ".$parent;
	}
	return the_object($parent);
}
function set_parents_vivant($pere,$vivPere,$mere,$vivMere){
	$parent="";
	$pere=parent($pere);
	$mere=parent($mere);
	if ($pere!="") {
		if ($vivPere==$vivMere && $vivPere=="non") {
			$parent=the_object($pere)." sy ".the_object($mere).", samy efa maty";
		}
		else{
			$parent=the_object($pere).vivant($vivPere)." sy ".the_object($mere).vivant($vivMere);
		}
	}
	else{
		if ($vivMere=="non") {
			$parent=the_object($mere).", efa maty";
		}
		else{
			$parent=the_object($mere);
		}
	}
	return $parent;
}
function ifExiste($obj,$value){
	$str="";
	if ($obj!="") {
		$str=$value;
	}
	if($obj==" "){
		$str="";
	}
	return $str;
}
function getMonth(){
	for ($i=0; $i<13 ; $i++) { 
		echo "<option>".completeZero($i)."</option>";
	}
}
function getDay(){
	for ($i=0; $i<32 ; $i++) { 
		echo "<option>".completeZero($i)."</option>";
	}
}
function completeZero($nbr){
	$str="";
	if ($nbr<10) {
		$str="0".$nbr;
	}
	else{
		$str=$nbr;
	}
	return $str;
}
function mention($database,$numNaiss){
	$result=$database->query("SELECT mention FROM mentionMarginal WHERE numNaiss='".$numNaiss."'");
	$data=$result->fetch();
	if (isset($data['mention'])) {?>
		<span class="tab">_______</span></span><span style="text-decoration: underline;">SORATRA AN-TSISINY</span><br/>
	<?php
	}
	$result=$database->query("SELECT mention FROM mentionMarginal WHERE numNaiss='".$numNaiss."'");
	while ($data=$result->fetch()) {?>
		<span class="tab">_______</span><?php echo $data['mention']; ?><br/><br/>		
	<?php
	}
}
function getRegistre($database, $query){
	$result=$database->query($query);
	while ($data=$result->fetch()) { ?>
		<option><?php echo $data["codeReg"]; ?></option>
	<?php
	}
}
function getOfficier($database){
	$result=$database->query("SELECT concat(numOff,' ',nomOff,' ',prenomOff) as nomOff, fonction from officier");
	while ($data=$result->fetch()) { 
		$officier="";
		if(!empty($data["fonction"])){
			$officier=$data["nomOff"]."(".$data["fonction"].")";
		}
		else{
			$officier=$data["nomOff"];
		}
		?>
		<option><?php echo $officier; ?></option>
	<?php
	}
}
function modif_personne($database,$numPers, $nom, $prenom, $date, $lieu, $profession, $adresse,$vivant, $age){
	$n=""; $p=""; $num=$numPers;
	$result=$database->query("SELECT nomPers, prenomPers FROM personne WHERE numPers=".$numPers);
	while($data=$result->fetch()){
		$n=$data['nomPers'];
		$p=$data['prenomPers'];
	}
	if ($p=="" && $n=="") {
		$num=ajoutPersonne($database,$nom, $prenom, $date, $lieu, $profession, $adresse, $vivant, $age);
	}
	else{
	    $result=$database->prepare("UPDATE personne SET nomPers=:nomPers, prenomPers=:prenomPers, dateNaissPers=:dateNaissPers, lieuNaissPers=:lieuNaissPers,adressePers=:adressePers,profPers=:profPers,vivant=:vivant,nationalite=:nationalite,age=:age WHERE numPers=:numPers");
	    $result->execute(array(
		'numPers' =>$numPers,
		'nomPers' =>$nom,
		'prenomPers' =>$prenom,
		'dateNaissPers' =>$date,
		'lieuNaissPers' =>$lieu,
		'profPers' =>$profession,
		'adressePers' =>$adresse,
		'vivant' => $vivant,
		'nationalite' =>"malagasy",
		'age' =>$age
		 ));
	}
	return $num;
}
function ajoutPersonne($database, $nom, $prenom, $date, $lieu, $profession, $adresse,$vivant, $age){
	$result=$database->prepare("INSERT INTO personne(numPers,nomPers,prenomPers,dateNaissPers,lieuNaissPers,adressePers,profPers,vivant,nationalite,age) VALUES(:numPers,:nomPers,:prenomPers,:dateNaissPers,:lieuNaissPers,:adressePers,:profPers,:vivant,:nationalite,:age)");
	$result->execute(array(
		'numPers' =>0 ,
		'nomPers' =>$nom,
		'prenomPers' =>$prenom,
		'dateNaissPers' =>$date,
		'lieuNaissPers' =>$lieu,
		'profPers' =>$profession,
		'adressePers' =>$adresse,
		'vivant' => $vivant,
		'nationalite' =>"malagasy",	
		'age' =>$age
		 ));
	return verifPersonne($database,$nom, $prenom, $date, $lieu, $profession,$vivant, $adresse);
}
function verifPersonne($database,$nom, $prenom, $date, $lieu, $profession,$vivant, $adresse){
	$num="";
	$result=$database->prepare("SELECT numPers FROM personne WHERE nomPers=:nomPers and prenomPers=:prenomPers and lieuNaissPers=:lieuNaissPers and dateNaissPers=:dateNaissPers and profPers=:profPers and adressePers=:adressePers and vivant=:vivant");
	$result->execute(array(
		'nomPers' => $nom,
		'prenomPers' => $prenom,
		'lieuNaissPers' => $lieu,
		'dateNaissPers' => $date,
		'profPers' => $profession,
		'adressePers' => $adresse,
		'vivant'=>$vivant
	));
	while($data=$result->fetch()) {		
		$num=$data["numPers"];
	}
	$result->closeCursor();
	return $num;
}
function getNumPersonne($database,$nom, $prenom, $date, $lieu, $profession, $adresse,$vivant, $age){
	$numPers=verifPersonne($database,$nom, $prenom, $date, $lieu, $profession,$vivant, $adresse);
	if ($numPers=="") {
		$numPers=ajoutPersonne($database,$nom, $prenom, $date, $lieu, $profession, $adresse,$vivant, $age);
	}
	return $numPers;
}
function ajoutJugement($numJugement, $dateJugement,$dateReception ,$dateEnregistre,$objetJugement,$origineJugement){
	global $database;
	$result=$database->prepare("INSERT INTO jugement(numJugement,dateJugement,dateReception,dateEnregistre,objetJugement,origineJugement) VALUES(:numJugement,:dateJugement,:dateReception,:dateEnregistre,:objetJugement,:origineJugement)");
	$result->execute(array(
		'numJugement' =>$numJugement ,
		'dateJugement' =>$dateJugement,
		'dateReception' =>$dateReception,
		'dateEnregistre' =>$dateEnregistre,
		'objetJugement' =>$objetJugement,
		'origineJugement' =>$origineJugement
	));	
}
function getJugeGreffier($database,$nomJuge, $nomGreffier){
    $res=$database->query("SELECT numJuge FROM jugeGreffier WHERE nomJuge='".$nomJuge."' and nomGreffier='".$nomGreffier."'");
	$data=$res->fetch();
	return $data["numJuge"];
}
function now(){
	global $database;
	$res=$database->query("SELECT date(now()) as date");
	$data=$res->fetch();
	return $data["date"];
}
function fonction($value){
	$str="";
	if ($value!=""){
		$str=", ".$value.", ";
	}
	return $str;
}
function nombre_enfant($type,$nbr){
	$str="";
	if ($type=="reconnaissance" && $nbr>1) {
		$str="ireto zaza manaraka ireto ";
	}
	else if($type=="adoption" && $nbr>1){
		$str="ireto ";
	}
	else{
		$str="i ";
	}
	return $str;
}
function vivant($viv){
	$str="";
	if ($viv=="non"){
		$str=", efa maty,";
	}
	return $str;
}
function set_jugement_mariage($database,$numPers,$array){
	$attr=array("numActeJug","dateJug");
	$result=$database->query("SELECT numActeJug,dateJug FROM naissance_jugement WHERE numPers=".$numPers);
	while ($data=$result->fetch()) {
	    for ($i=0; $i <2 ; $i++) {
	    ?>
		<input type='hidden' name="<?php echo $array[$i]; ?>" value="<?php echo $data[$attr[$i]]; ?>">
	    <?php
	    }
	    break;
	}
}
function set_situation($database,$numPers,$dateMariage,$nom){
	$result=$database->query("SELECT description FROM situation_matrimoniale WHERE codeSit='".$numPers."-".$dateMariage."'");
	while ($data=$result->fetch()) {
	    ?>
		<input type='hidden' name="<?php echo $nom; ?>" value="<?php echo $data['description']; ?>">
	    <?php
	    break;
	}
}

?>