function chargement(type){
	if (type=="jugement") { showJugement(); }
	else{ showDeclaration() }
}
function placer(valeur,id){
	form0.elements[id].value=valeur;
}
function showDeclaration(){
	document.getElementById("declaration").checked=true;
	document.getElementById("form_jugement").style.visibility="hidden";
	document.getElementById("form_declaration").style.visibility="visible";
	document.getElementById("legitimite").style.visibility="visible";
}
function showJugement(){
	document.getElementById("jugement").checked=true;
	document.getElementById("form_declarant").style.visibility="visible";
	document.getElementById("form_declarant").style.visibility="hidden";
	document.getElementById("form_jugement").style.visibility="visible";
	document.getElementById("form_declaration").style.visibility="hidden";
	document.getElementById("legitimite").style.visibility="hidden";
}
function changeFont(font){
	if (font=="Times New Roman") {
		document.getElementById("titre").style.fontFamily="Times New Roman";
		document.getElementById("act").style.fontFamily="Times New Roman";
	    document.getElementById("act").style.fontSize="22px";
        document.getElementById("act").style.fontStyle="italic";
        doc=document.querySelectorAll("#ctrl");
        for(i of doc){
        	i.style.fontFamily="Times New Roman";
        	i.style.fontSize="24px";
        	i.style.fontStyle="italic";

        }
        document.getElementById("commercial").style.fontFamily="Times New Roman";
	    document.getElementById("commercial").style.fontSize="22px";
        document.getElementById("commercial").style.fontStyle="italic";
        document.getElementById("date").style.fontFamily="Times New Roman";
	    document.getElementById("date").style.fontSize="20px";
        document.getElementById("date").style.fontStyle="italic";
	}
	else{
		document.getElementById("titre").style.fontFamily="Swenson";
		document.getElementById("act").style.fontFamily="Commercial Script BT";
		document.getElementById("act").style.fontSize="25px";
		document.getElementById("act").style.fontStyle="normal";
		doc=document.querySelectorAll("#ctrl");
        for(i of doc){
        	i.style.fontFamily="Commercial Script BT";
        	i.style.fontSize="29px";
        	i.style.fontStyle="normal";;

        }
        document.getElementById("commercial").style.fontFamily="Commercial Script BT";
	    document.getElementById("commercial").style.fontSize="25px";
        document.getElementById("commercial").style.fontStyle="normal";
        document.getElementById("date").style.fontFamily="Commercial Script BT";
	    document.getElementById("date").style.fontSize="24px";
        document.getElementById("date").style.fontStyle="normal";

	}

}
function set_officier(valeur){
	var cpt=0;
	do{
		str=form0.elements['numOff'].options[cpt].innerHTML;
		var array=str.split(' ');
		form0.numOff.selectedIndex=cpt;
		cpt+=1;
	}while(array[0]!=valeur)
}
function setType(type){
	document.location="form_naissance.php?type="+type
}
function complete_champ(array){
	for (var i = 0; i < array.length; i++) {
		form0.elements[array[i]].value=form1.elements[array[i]].value;
	}
}
function set_valueOf(nomChampSplit,nomChamps){
	array=(form1.elements[nomChampSplit].value).split("-");
	form0.elements['day'+nomChamps].value=array[2];
	form0.elements['month'+nomChamps].value=array[1];
	form0.elements['year'+nomChamps].value=array[0];
}
function type(type){
	document.getElementById(String(type)).checked=true;
}
function recharger_page(page){
	document.location=page+"?registre="+form0.registre.value;
}
function registre_selectionne($registre){
	form0.registre.value=$registre;
}
function send(nbrElt,num,type){
	url="";
	cpt=1;
	for(i=0; i<nbrElt; i++){
		if (form0.elements['case'+i].checked==true) {
			url+="enfant"+cpt+"="+form0.elements['case'+i].value+"&";
			cpt+=1;
		}
	}
	if (cpt=="") {
		alert("Selectionnez-en un au moins");
	}
	else{
	    if (type=="reconnaissance") {
		    document.location="acte_reconnaissance.php?numRec="+num+"&"+url+"nbr="+(cpt-1);
	    }
	    else{
	    	url+="lieuAdopt="+form0.lieuAdopt.value+"&";
		    document.location="acte_adoption.php?numAdopt="+num+"&"+url+"nbr="+(cpt-1);
	    }
	}
}
function simple(nbr,num,type){
	if (nbr==1) {
		send(nbr,num,type);
	}
}
function insertion_multiple($type){
	var titre="";
	var url=""
	if ($type=="adoption") {
		titre="Saisissez le nombre d'enfants à adopter";
		url="form_adoption";
	}
	else{
		titre="Saisissez le nombre d'enfants à reconnaitre";
		url="form_reconnaissance";		
	}
	do{
	    nbr=prompt(titre);
	}while(isNaN(nbr)==true)
	if (nbr>0) {
		document.location=url+".php?nbr="+nbr;
	}
}
