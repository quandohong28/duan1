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
