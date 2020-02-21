<?php

if (isset($_POST) && !empty($_POST)) {

    /**
     * recuperation des valeurs
     */
    $dataForm = [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'ville' => $_POST['ville'],
        'genre' => $_POST['genre'],
        'typeChambre' => $_POST['typeChambre'],
        'nombreSejour' => $_POST['nombreSejour'],
    ];
    // print_r($dataFormReservation);

    $result = validateForm($dataForm);

    if (!$result) {
        redirectPage('./pageErreurs/data_invalide/data_invalid');
    } else {
        if ($result["isEmail"] == "false") {
            redirectPage('./pageErreurs/data_invalide/data_invalid');
        } else {
            require("DataBaseConnexion/connexion.php");
        }
    }

} else {
    redirectPage('./pageErreurs/data_invalide/data_invalid');
}


/**
 * @param string $page
 */
function redirectPage($page = "")
{
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $path = header("Location: http://$host$uri/$page.php");

    return $path;
}


/**
 * @param array $data
 * @return array|bool
 */
function validateForm($data = [])
{
    foreach ($data as $key => $e) {

        if (!empty($e)) {
            trim($e);
            strtolower($e);
            htmlspecialchars($e);
            if ($key == "email") {
                $email = filter_var($e, FILTER_VALIDATE_EMAIL);
                if ($email) {
                    $data["isEmail"] = "true";
                } else {
                    $data["isEmail"] = "false";
                }
            }
        } else {
            return false;
        }
    }

    return $data;
}


















