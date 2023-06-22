<?php
require './utils/dataBase.php';
$conexion = dataBase();

function getById($id)
{
    global $conexion;
    try {
        $query = "SELECT * FROM ejemplo WHERE id = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $resultado = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $resultado;
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
function getAll()
{
    global $conexion;
    try {

        $query = "SELECT * FROM ejemplo";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $resultado;
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

function create($nombre, $phone)
{
    global $conexion;
    try {
        $query = "INSERT INTO ejemplo(nombre, phone) VALUES (?,?);";

        $stmt = $conexion->prepare($query);
        $stmt->bind_param('si', $nombre, $phone);
        $stmt->execute();
        return $stmt->insert_id;

    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

function update($nombre, $phone)
{
    global $conexion;
    try {
        $query = "INSERT INTO ejemplo(nombre, phone) VALUES (?,?);";

        $stmt = $conexion->prepare($query);
        $stmt->bind_param('si', $nombre, $phone);
        $stmt->execute();
        return $stmt->insert_id;

    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
}