<?php


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