<?php

require("City.class.php");

// TODO instanciez plusieurs objets de la classe Ville avec leur nom et leur département

// Nouveau tableau qui contiendra les objets de la classe "Ville" créés précédemment
$cities = [];
// TODO ajoutez les villes au tableau en utilisant "array_push" : https://www.php.net/manual/fr/function.array-push.php
// Ajout au tableau
array_push($cities, <ajoutez-ici-les-objets-de-la-classe-ville>);

// TODO afficher les villes en HTML en utilisant "echo", c'est la chaîne de caractères renvoyées par "__toString()" qui devra être affiché pour chaque ville
// pour afficher une chaîne de cractère pour une ville vous pouvez utiliser : echo $objetVille
// Par exemple, pour les villes de "Tourcoing" et "Mouroux" la page devra afficher les deux lignes suivantes :
// La ville de Tourcoing est dans le département : Nord
// La ville de Mouroux est dans le département : Seine-et-Marne
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des villes</title>
</head>
<body>

<h1>Villes</h1>

<?php
// TODO concevoir affichage
?>

</body>
</html>