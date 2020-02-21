<?php


$table = "";
$data = [];


/**
 * @param string $page
 */

/**
 * @param $table
 * @param $data
 */
function insertTo($sql)
{
    $result = cnx()->query("$sql");

    if ($result) {

        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri");

    }
}


/**
 * @param $table
 * @return bool|PDOStatement
 */
function selectALL($sql)
{
    $result = cnx()->prepare("$sql");
    return $result;

}


/**
 * @param $table
 * @param $data
 * @param $id
 */
function update($table, $data, $id)
{
}


/**
 * @param $table
 * @param $data
 * @param $id
 */
function delete($table, $data, $id)
{

}

function cnx()
{
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "db_rco_project";

//mysqli_connect($host, $user, $password, $database);

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}

