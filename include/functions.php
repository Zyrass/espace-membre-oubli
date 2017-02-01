<?php 
// Fonction permettant de vérifier la présence d'un membre ou non en base de donnée.
// Pour cette exemple on ne traite pas encore les bdd donc on va se contenter d'un tableau vide pour avoir une erreur d'afficher.
// Pour voir que la redirection fonctionnera, on saisira : 
// ---------------------------------------------------------------------------------------------
// return [
//      "id" => 8;
//      "password" => "totototo";
// ];
function accountExist() : array {
    return [];
}

// Fonction permettant de simuler la présence d'une adresse email ou nous via un teste simple.
// true     -> Permet de dire que l'adresse mail est disponible.
// false    -> Permet de dire que l'adresse mail n'est pas disponible.
function mailFree() : bool  {
    return true;
};

