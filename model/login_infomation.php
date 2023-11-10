<?php

function getAllAccounts()
{
    $sql = "SELECT * FROM login_infomation";
    return pdo_execute($sql);
}

function getAccountById($id)
{
    $sql = "SELECT * FROM login_infomation WHERE id = $id";
    return pdo_query_one($sql);
}

function addAccount($username, $password)
{
    $sql = "INSERT INTO login_infomation (username, password) VALUES (?, ?)";
    return pdo_execute($sql, $username, $password);
}

function getAccountByUserName($username)
{
    $sql = "SELECT * FROM login_infomation WHERE username = '$username'";
    return pdo_query_one($sql);
}

function getAccountByRankId($rank_id)
{
    $sql = "SELECT e.id, e.name, l.username, l.password, r.id AS rank_id, r.name
    FROM
    login_infomation l
    INNER JOIN employees e ON e.id = l.employee_id
    INNER JOIN ranks r ON r.id = e.rank_id
    WHERE rank_id = $rank_id";
    return pdo_query($sql);
}
