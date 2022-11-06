document.getElementById("Ajouter categorie").addEventListener("submit",function(e){
    e.preventDefault();

var erreur;
var nom = document.getElementById("nom");
var description = document.getElementById("description");


document.getElementById("nom").value == ""
if(!nom.value){
    erreur = "veillez saisir un nom";
}
if(!description.value){
    erreur = "veillez saisir une description";
}

if (erreur){
    document.getElementById("erreur").innerHTML = erreur;
    return false;
}
else {
    alert ('Ajout validé !'); 
}




});