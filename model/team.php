<?php
function getAllTeams()
{
    $sql = "SELECT * FROM teams";
    return pdo_query($sql);
}

function getNumberOfEmlpoyeesByTeamId($team_id)
{
    $sql = "SELECT COUNT(*) AS employee_number FROM employees WHERE team_id = $team_id";
    return pdo_query_one($sql);
}

function getTeamByDepartmentId($department_id)
{
    try {
        $sql = "SELECT
        teams.*,
        employees.avatar
    FROM
        teams
    INNER JOIN employees ON employees.id = teams.team_lead_id
    WHERE
        teams.department_id = '$department_id'";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getTeamByEmployeeId($employee_id)
{
    try {
        $sql = "SELECT * FROM teams WHERE id = (SELECT team_id FROM employees WHERE id = $employee_id)";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


