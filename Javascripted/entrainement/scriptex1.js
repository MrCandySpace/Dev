function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}


let chiffre = getRandomInt(99);
let saisie = document.querySelector("#saisie").value;

document.querySelector("#envoyer").onclick = afficherResultat;

function afficherResultat() {
    /* console.log(chiffre); */
    let saisie = document.querySelector("#saisie").value;
    saisie = Number(saisie);
    if (saisie != "NaN") {
        resultat.textContent = "Nombre ?";
        if (saisie < chiffre) {
            resultat.textContent = "C'est plus";
        } else if (saisie > chiffre) {
            resultat.textContent = "C'est moins";
        } else if (saisie == chiffre) {
            resultat.textContent = "C'est vrai";
        } else {

        }
    }
}



document.querySelector("#reset").onclick = resetlenombre;

function resetlenombre() {
    console.log("activation du reset de la fonction");
    chiffre = getRandomInt(99);

}
