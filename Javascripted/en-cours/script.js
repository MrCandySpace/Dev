const list = document.querySelector('ul'); /* Création de la constance list, lié à l'élément de l'html 'ul' */
const input = document.querySelector('input'); /* Création de la constance input, lié à l'élément de l'html 'input' */
const button = document.querySelector('button'); /* Création de la constance button, lié à l'élément de l'html 'button' */

button.addEventListener('click', () => { /* Fait en sorte que le 'bouton' réagis au click */
    const myItem = input.value; /* La constance 'myItem' deviens la variable 'input.value' */
    input.value = ''; /* 'input.value' est formaté */

    const listItem = document.createElement('li'); /* La constance 'listItem' permet de crée dans le HTML un élement 'li' -> liste */
    const listText = document.createElement('span'); /* La constance 'listText' permet de crée dans le HTML un élement 'span' -> insertion de texte */
    const listBtn = document.createElement('button'); /* La constance 'listBtn' permet de crée dans le HTML un élement 'button' -> bouton */

    listItem.appendChild(listText); /* Fait en sorte que la liste (li) est un enfant (arboressance en dessous) contenant le texte  -> listText*/
    listText.textContent = myItem; /* Fait en sorte que le texte contien le contenue de 'myItem' */
    listItem.appendChild(listBtn); /* Fait en sorte que la liste (li) est un enfant -> un bouton */
    listBtn.textContent = 'Delete'; /* Fait en sorte que le bouton (listBtn) contien un texte : "Delete" */
    list.appendChild(listItem); /* Fait en sorte que la liste (ul) est un enfant -> la liste (li) */

    listBtn.addEventListener('click', () => { /* Fait en sorte que l'enfant bouton crée précédement réagis au click */
        list.removeChild(listItem); /* Fait en sorte que dans la liste (ul) l'enfant (li) soit supprimé */
    });
    input.focus(); /* Permet de remettre le curseur dans le 'input' (la boite) */
});

