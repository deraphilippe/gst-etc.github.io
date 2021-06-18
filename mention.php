<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style type="text/css">
		#except
		{
			position: absolute;
			left: 450px;
			top: 70px;
			width: 800px;
			height: 400px;
			background-color: rgba(192,191,192,0.5);
		}
		#formulaire fieldset
		{
			font-family: "Calibri";
			font-size: 19px;
			position: absolute;
			top: 70px;
			background-color: white;
		}
		textarea
		{
			font-family: "Calibri";
			font-size: 19px;
		}
		#boutonMod{
			border-radius: 5px;
			background-color: green;
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<header>
		<?php 
		include("header.php");
		include("classe/Model.php"); 
		include("classe/FormatDatetime.php"); 
		include("classe/fonction_util.php"); 
		$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
		$mention="";
		if (isset($_GET['numMention'])) {
			$result=$database->query("SELECT mention FROM mentionMarginal WHERE numMention=".$_GET['numMention']);
			$mention=($result->fetch())["mention"];
			$action="modif_mention.php";
			$submit="Valider Modification";
		}
		else{
		    $action="ajout_mention.php";
			$submit="Enregistrer";
		}
		?> 
	</header>
	<section>
    <div id="formulaire">
	<fieldset>
		<legend >Enregistrement mention <?php echo $_GET['numNaiss']; ?></legend>
		<form action=" <?php echo $action; ?>" method="post">
		<p><textarea cols="40" rows="10" id="input_mention" name="mention"><?php echo $mention; ?></textarea></p>
		<p><input id="bouton" type="submit" value="<?php echo $submit; ?>"></p>
		<input type="hidden" name="numNaiss" value="<?php echo $_GET['numNaiss'];?>">
		<input type="hidden" name="numMention" value="<?php echo $_GET['numMention'];?>">
		</form>
	</fieldset>
	</div>
		<div id="except">
			<form id="form0">
			<?php 
			$result=$database->query("SELECT * FROM mentionMarginal WHERE numNaiss='".$_GET['numNaiss']."'");

			echo "<table>";
			echo "<tr><th>Identifiant</th>";
			echo "<th>Mention</th>";
			echo "<th>Modification</th>";
			echo "<th>Suppression</th></tr>";
			while ($data=$result->fetch()) {
				?>
				<tr><td><?php echo $data["numMention"] ?></td>
				<?php 
				echo "<td>".$data["mention"]."</td>";
				echo "<td>";
				if ($_SESSION["modif"]=="oui") {
					echo "<a id='boutModif' style='padding: 5px' href='mention.php?numNaiss=".$_GET['numNaiss']."&numMention=".$data["numMention"]."'>Modifier</a></td> <td><a id='boutSup' style='margin: 5px' href='suppr_mention.php?numNaiss=".$_GET['numNaiss']."&numMention=".$data["numMention"]."'>Supprimer</a></td>";
				}
				echo "</tr>";
			}
			echo "</table>"
			?>
			</form>
	</section>
	<script>
		document.getElementById("bouton").addEventListener('click',function(e){
			if (document.getElementById("input_mention").value=="") {
				e.preventDefault();
			}
		});
	</script>
</body>
</html>