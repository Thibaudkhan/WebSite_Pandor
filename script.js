//document.getElementById('button').focus();
 

var death = document.getElementById("death"); 
var infected = document.getElementById("infected") ; 
var heal = document.getElementById("heal") ; 
 //checkbox
var clean = document.getElementById('clean').checked;
var confinement = document.getElementById('confinement').checked;
var protection = document.getElementById('protection').checked;
var financementSoignant = document.getElementById('financementSoignant').checked;
var financementRecherche = document.getElementById('financementRecherche').checked;
var mask = document.getElementById('mask').checked;

var deathResult = 100;
var infectedResult = 100;
var healResult = 5;

death.innerHTML = "20%"; 
infected.innerHTML = "37%"; 
heal.innerHTML = "5%"; 

function clickSample(id){
	console.log('click');
	document.getElementById('bloc'+id).focus();
	console.log(document.activeElement.tagName)
}

function test(){
	console.log("test");
}



function validate() {
	deathResult = 10;
	infectedResult = 100;
	healResult = 5;
    if (document.getElementById('clean').checked) {
    	infectedResult -= Math.round(Math.random() * (20 - 15) + 15); 
    }if(document.getElementById('confinement').checked){
    	infectedResult -= Math.round(Math.random() * (40 - 30) + 30); 

    }if(document.getElementById('protection').checked){
    	infectedResult -= Math.round(Math.random() * (25 - 15) + 15);

    }if(document.getElementById('financementSoignant').checked){
    	deathResult -= Math.round(Math.random() * (4 - 1) + 1);
    	healResult += Math.round(Math.random() * (50 - 20) + 20);

    }if(document.getElementById('financementRecherche').checked){
    	deathResult -= Math.round(Math.random() * (5 - 1) + 1);
    	deathResult = 10 -(deathResult);
    	healResult += Math.round(Math.random() * (40 - 10) + 10);

    }if(document.getElementById('mask').checked){
    	infectedResult -= Math.round(Math.random() * (15 - 10) + 10); 
    }
    
    death.innerHTML = deathResult+"%";
    infected.innerHTML = infectedResult+"%";
    heal.innerHTML = healResult+"%";
    
}

