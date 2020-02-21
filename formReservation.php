<?php

include_once('./crud_queries/Querry.php');
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
        'contact' => $_POST['contact'],
        'typeChambre' => $_POST['typeChambre'],
        'nombreSejour' => $_POST['nombreSejour'],
    ];
    // print_r($dataFormReservation);

    $result = validateForm($dataForm);

    if (!$result) {
        redirectPage('./pageMessages/data_invalide/data_invalid');
    } else {
        if (($result["isEmail"] == "false") || ($result["numberDayIsPositive"] == "false")) {
            redirectPage('./pageMessages/data_invalide/data_invalid');
        } else {

            $nom = $result['nom'];
            $prenom = $result['prenom'];
            $email = $result['email'];
            $genre = $result['genre'];
            $contact = $result['contact'];
            $ville = $result['ville'];
            $nom_hotel = $result['nom_hotel'];
            $type_chambre = $result['typeChambre'];
            $nomHotel = $_GET['s'];
            $nombre_sejour = $result['nombreSejour'];

            $created_at = Date('Y-m-d - H:i:s');

            insertTo("INSERT INTO clients (nom, prenom, email, genre, contact, ville, created_at) VALUES ('$nom', '$prenom', '$email', '$genre', '$contact', '$ville', '$created_at')");
            insertTo("INSERT INTO hotels (nom_hotel, type_chambre, created_at) VALUES ('$nomHotel', '$type_chambre', '$created_at')");
            insertTo("INSERT INTO reservations (date_reservation, nombre_sejour, created_at) VALUES ('$created_at', '$nombre_sejour', '$created_at')");

        }
    }

} else {
    redirectPage('./pageMessages/data_invalide/data_invalid');
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
            $key == "nombreSejour" ? ($e > 0 ? $data["numberDayIsPositive"] = "true" : $data["numberDayIsPositive"] = "false") : null;
        } else {
            return false;
        }
    }

    return $data;
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








