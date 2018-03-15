<?php

// A mettre dans un fichier login.php

if(		// Si login et password en POST existent et ne sont pas vide, alors on execute la suite.
    isset($_POST['email']) AND
    isset($_POST['password'])
)
{

    $emailDb = 'jean@exemple.com';		// Déclaration d'une variables email et password pour simuler l'existence d'une base de données (simplification de l'exercice).
    $passwordDb = 'azerty';

    if($_POST['email'] != $emailDb){
        $errors['incorrectEmail'] = true;
    }

    if($_POST['password'] != $passwordDb){
        $errors['incorrectPassword'] = true;
    }

    if(!isset($errors)){
        $success = true;
        // Sur un vrai site, on procède à la connexion ici
    }


}

if(isset($errors)){
    $jsonResponse = array('success' => false, 'errors' => $errors);
} elseif(isset($success)){
    $jsonResponse = array('success' => true, 'errors' => false);
} else {
    $jsonResponse = array('success' => false, 'errors' => array('incorrect-query'));
}

echo json_encode($jsonResponse);		// On affiche en JSON le contenu du tableau jsonResponse, qui sera récupéré ensuite par la requête AJAX.
?>