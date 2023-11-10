<?php
function getAllTeams()
{
    $sql = "SELECT * FROM teams";
    return pdo_query($sql);
}
