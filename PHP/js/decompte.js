const balise = document.createElement("h3");
const item = document.querySelectorAll(".article");
balise.style.color="pink";
document.querySelector("#demo").appendChild(balise).innerText=
"Nombre de personnages dans la liste: " +item.length;