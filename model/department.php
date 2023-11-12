<?php

function getAllDepartments()
{
    $sql = "SELECT * FROM departments;";
    return pdo_query($sql);
}

function getDepartmentById($id)
{
    $sql = "SELECT * FROM departments WHERE id = '$id';";
    return pdo_query_one($sql);
}

function getDepartmentByMangerID($manager_id)
{
    $sql = "SELECT * FROM departments WHERE manager_id = '$manager_id';";
    return pdo_query_one($sql);
}

function addDepartment($name, $manager_id, $description)
{
    try {
        $sql = "INSERT INTO departments (name, manager_id, description) VALUES ('$name', '$manager_id', '$description');";
        echo $sql;
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function updateDepartment($id, $name, $manager_id, $start_date, $work_months)
{
    $sql = "UPDATE departments SET name = ?, manager_id = ?, start_date = ?, work_months = ? WHERE id = ?;";
    return pdo_execute($sql, $name, $manager_id, $start_date, $work_months, $id);
}

function deleteDepartment($id)
{
    $sql = "DELETE FROM departments WHERE id = ?;";
    pdo_execute($sql, $id);
}

function getDepartmentByTeamId($team_id)
{
    $sql = "SELECT * FROM departments WHERE team_id = $team_id";
    return pdo_query($sql);
}

function getNumberOfTeamsByDepartment($department_id)
{
    $sql = "SELECT COUNT(*) as team_number FROM teams WHERE department_id = $department_id";
    return pdo_query_one($sql);
}

function getNumberOfEmlpoyeesByDepartment($department_id)
{
    $sql = "SELECT COUNT(*) as employee_number FROM employees WHERE department_id = $department_id";
    return pdo_query_one($sql);
}
