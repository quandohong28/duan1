<?php

function getAllEmployees()
{
    try {
        $sql = "SELECT * FROM employees";
        return pdo_query($sql);
    } catch (Exception $e) {
        return "Error: " . $e->getMessage();
    }
}

function getEmployeeById($id)
{
    $sql = "SELECT * FROM employees WHERE id = $id";
    return pdo_query_one($sql);
}

function addEmployee($name, $birthdate, $start_date, $work_months, $bio, $job_title, $rank_id, $department_id, $team_id)
{
    $sql = "INSERT INTO employees (name, email, phone, address, salary, avatar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    return pdo_execute($sql, $name, $birthdate, $start_date, $work_months, $bio, $job_title, $rank_id, $department_id, $team_id);
}

function updateEmployee($id, $name, $birthdate, $start_date, $work_months, $bio, $job_title, $rank_id, $department_id, $team_id)
{
    $sql = "UPDATE employees SET name = ?, email = ?, phone = ?, address = ?, salary = ?, avatar = ? WHERE id = ?";
    return pdo_execute($sql, $name, $birthdate, $start_date, $work_months, $bio, $job_title, $rank_id, $department_id, $team_id, $id);
}

function deleteEmployee($id)
{
    $sql = "DELETE FROM employees WHERE id = ?";
    pdo_execute($sql, $id);
}

function getEmployeeByDepartmentId($department_id)
{
    $sql = "SELECT * FROM employees WHERE department_id = $department_id";
    return pdo_query($sql);
}

function getEmployeeByTeamId($team_id)
{
    $sql = "SELECT * FROM employees WHERE team_id = $team_id";
    return pdo_query($sql);
}

function getEmployeeByRankId($rank_id)
{
    $sql = "SELECT * FROM employees WHERE rank_id = $rank_id";
    return pdo_query($sql);
}

function getContactInfoByEmployeeId($id)
{
    $sql = "SELECT * FROM contact_infomation WHERE id = $id";
    return pdo_query($sql);
}

function updateContactInfo($id, $employee_id, $phone_number, $email, $location)
{
    $sql = "UPDATE contact_infomation SET employee_id = ?, phone_number = ?, email = ?, location = ? WHERE id = ?";
    return pdo_execute($sql, $employee_id, $phone_number, $email, $location, $id);
}

function updateWorkMonths($id, $work_months)
{
    $sql = "UPDATE employees SET work_months = ? WHERE id = ?";
    return pdo_execute($sql, $work_months, $id);
}

function updateRank($id, $rank_id)
{
    $sql = "UPDATE employees SET rank_id = ? WHERE id = ?";
    return pdo_execute($sql, $rank_id, $id);
}

function updateTeam($id, $team_id)
{
    $sql = "UPDATE employees SET team_id = ? WHERE id = ?";
    return pdo_execute($sql, $team_id, $id);
}
