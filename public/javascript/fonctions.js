// validation de l'entrée pour la supression
function validerNombre(param){
    var codeS=document.getElementById(param).value;
    var mesSupprimer = document.getElementById('messageSupprimer'); 
    var regexNombre=new RegExp("^[0-9]{1,4}$");
    mesSupprimer.style.display = "none";
    
    if (codeS  == '' || !regexNombre.test(codeS)){
        mesSupprimer.style.display = "block"; // montrer le message d'erreur
        return false;
    }
}

function listerCode(){
    document.getElementById('formLister').submit();
}

function listerMontreal(){
    document.getElementById('formListerM').submit();
}

function envoyerLister(par, valeurPar){
	if (par!==""){
		document.getElementById('par').value=par;
		document.getElementById('valeurPar').value=valeurPar;
	}
	document.getElementById('formLister').submit();
}

function montrer(elem){
    cacher('montrerForm');
    cacher ('montrerSupp');
	
    document.getElementById(elem).style.display='block';
}