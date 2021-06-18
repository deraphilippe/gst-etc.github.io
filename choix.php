<?php 
session_start();
include("header.php") ;
include("classe/FormatDatetime.php"); 
include("classe/fonction_util.php"); 
$datetime=new FormatDateTime();
$datetime->completeTimeTab();
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="backinfo"></div>
	<div id="info-sup" style="position: center">

		<form id="form0">
		SELECTIONNER DES NOMS:<br/>
		<?php
		$cpt=0;
		if ($_GET['type']=="reconnaissance") {
			$enfants=array("nomEnfant","prenomEnfant","sexeEnfant","lieuNaissEnfant","dateNaissEnfant","nomMere","prenomMere");
			$num=$_GET['numRec'];
			$result=$database->query("SELECT * FROM reconnaitre WHERE numRec='".$_GET['numRec']."' ORDER BY dateNaissEnfant ASC");
		    while ($data=$result->fetch()) {
		    	foreach ($enfants as $key){
		    		$_SESSION[$key.$cpt]=$data[$key];
		    	}
			    echo "<input name='case".$cpt."' checked type='checkbox'>". $data['nomEnfant']." ".$data['prenomEnfant']."<br/>";
			    $cpt+=1;
			}
		}
		else{
			$enfants=array("nomEnfant","prenomEnfant","sexeEnfant","lieuNaissEnfant","dateNaissEnfant","nomMere","nomPere");
			$num=$_GET['numAdopt'];
			$result=$database->query("SELECT * FROM acteAdoption WHERE numAdopt='".strval($_GET['numAdopt'])."' ORDER BY dateNaissEnfant ASC");
		    while ($data=$result->fetch()) {		    	
		    	foreach ($enfants as $key){
		    		$_SESSION[$key.$cpt]=$data[$key];
		    	}
			    echo "<input name='case".$cpt."' checked type='checkbox'>". $data['nomEnfant']." ".$data['prenomEnfant']."<br/>";
			    $cpt+=1;
			}
		}	
		?>
		<p><a id="bouton" > Valider </a></p>
		</form>
	</div>
</body>
<script type="text/javascript">
	if (parseInt("<?php echo $cpt ?>")==1){
		document.location=getType("<?php echo $_GET['type'] ?>")+"&list=0";
	}
	function getType(type) {
	    var page="";			
		if (type=="reconnaissance") {
			page="acte_reconnaissance.php?numRec="+"<?php if (isset($_GET['numRec'])) echo $_GET['numRec'] ?>";
		}
		else{
			page="acte_adoption.php?numAdopt="+"<?php if (isset($_GET['numAdopt'])) echo $_GET['numAdopt'] ?>";
		}
		return page;
	}
	document.getElementById('bouton').addEventListener('click',function(e){	
	    var cpt=0;
	    var type="<?php echo $_GET['type'] ?>";
	    page=getType(type);
		var list="";
		if (parseInt("<?php echo $cpt ?>")>1) {
		    for (var i = 0; i<parseInt("<?php echo $cpt ?>"); i++) {
			    if (form0.elements['case'+i].checked==true) {
			    	list=list+i;
			    	cpt+=1;
			    }
		    }
		    page=page+"&list="+list;
        }

        if (cpt==0 && parseInt("<?php echo $cpt ?>")>1) {
        	alert("Selectionnez au moins une personne");
        	e.preventDefault();
        }

        else{
        	document.location=page;
        }

	});
</script>
</html>