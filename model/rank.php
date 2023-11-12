<?php

function getAllRanks()
{
    try {
        $sql = "SELECT * FROM ranks";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

// lấy ra số lượng nhân viên theo cấp bậc
function getNumberOfEmployeesByRank($rankId)
{
    try {
        $sql = "SELECT COUNT(*) as employee_number FROM employees WHERE rank_id = $rankId";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getRankById($id)
{
    try {
        $sql = "SELECT * FROM ranks WHERE id = $id";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
function getRankByName($name)
{
    try {
        $sql = "SELECT * FROM ranks WHERE name = '$name'";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getRankByEmployeeId($employeeId)
{
    try {
        $sql = "SELECT * FROM ranks WHERE id = (SELECT rank_id FROM employees WHERE id = $employeeId)";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function addRank($name, $description)
{
    try {
        $sql = "INSERT INTO ranks (name, description) VALUES ('$name', '$description')";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function updateRank($id, $name, $description)
{
    try {
        $sql = "UPDATE ranks SET name = '$name', description = '$description' WHERE id = $id";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function deleteRank($id)
{
    try {
        $sql = "DELETE FROM ranks WHERE id = $id";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
