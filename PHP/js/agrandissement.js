const boutonLirePlus = document.querySelectorAll(".bouton-lire-plus")
const texte = document.querySelectorAll(".texte")
for (let i=0; i< boutonLirePlus.length; i++){
    boutonLirePlus[i].addEventListener("click",function(){
        texte[i].classList.toggle("voirplus");
        if(boutonLirePlus[i].innerHTML ==="Voir plus"){
            boutonLirePlus[i].innerText ="Voir moins";
        }
        else{
            boutonLirePlus[i].innerText = "Voir plus";
        }
    });
}
