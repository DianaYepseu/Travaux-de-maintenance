function compterRebours(){
const decompte= document.querySelector("#decompteJs");
const champJours=document.querySelector("#jours");
const champHeures=document.querySelector("#heures");
const champMinutes=document.querySelector("#minutes");
const champSecondes=document.querySelector("#secondes");
const dateActuel=new Date ().getTime();
const dateEvenement= new Date("Mar 09 00:00:00 2026").getTime();
const totalSecondes = (dateEvenement - dateActuel)/1000;
if (totalSecondes<0){
    clearTimeout(compterRebours);
}

if(totalSecondes > 0){
    const jours = Math.floor(totalSecondes / (60 * 60 * 24));
    const heures = Math.floor((totalSecondes - (jours * 60 * 60 * 24)) /  (60 * 60));
    const minutes = Math.floor((totalSecondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
    const secondes = Math.floor(totalSecondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));
    
champJours.innerText=jours;
champHeures.innerText=heures;
champMinutes.innerText=minutes;
champSecondes.innerText=secondes;
}
else{
    decompte.innerText= "Compte à rebours terminé!"
}
setInterval(compterRebours, 1000)
}
compterRebours();
