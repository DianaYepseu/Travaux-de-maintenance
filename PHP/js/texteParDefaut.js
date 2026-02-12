const texte = document.querySelector("#texte");
texte.addEventListener("focus", avecFocus);
texte.addEventListener("blur", sansFocus);

texte.value = "exemple@gmail.com";

function avecFocus() {
    if (texte.value=="exemple@gmail.com"){
        texte.value = "";
    }


}

function sansFocus() {
    if (texte.value== ""){
        texte.value = "exemple@gmail.com";
    }
}
