const listeVignettes = document.querySelectorAll(".vignette-barbie");
console.log (listeVignettes)
for (let i = 0; i<listeVignettes.length; i++){
  listeVignettes[i].addEventListener("mousedown", function (){
  afficherDetailBarbie(this.id);
  
  });
}

function afficherDetailBarbie(barbie){
  let detail = document.querySelector("#detail-" + barbie);

 let zoneAffichage= document.querySelector("#zone-affichage");
zoneAffichage.innerHTML = detail.innerHTML;
}