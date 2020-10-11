// renvoit la liste de tout les éléments div ayant une classe card
let cardArray = document.querySelectorAll('div.card'); 
// cardArray.forEach(element => console.log(element));

let imgArray = ['facebook.svg', 'instagram.svg', 'twitter.svg', 'youtube.svg'];


// fonction une image aléatoire dans une liste
function randomImage(i) {
    return i[Math.floor(Math.random()*i.length)];
}
// console.log(randomImage(imgArray));

// fonction insérer dans une div
function insertImage(element, insertion) {
    element.innerHTML = insertion;
}

// Pour chaque div insert une image au pif
cardArray.forEach(function(i) {
    insertImage(i, randomImage(imgArray));
});