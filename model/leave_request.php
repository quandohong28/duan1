<?php

function getRequests()
{
    $sql = "SELECT * FROM leave_request";
    return pdo_execute($sql);
}

function getRequestById($id)
{
    $sql = "SELECT * FROM leave_request WHERE id = '$id';";
    return pdo_query_one($sql);
}

function addRequest($employee_id, $start_date, $end_date, $type, $reason, $status)
{
    $sql = "INSERT INTO leave_request (employee_id, start_date, end_date, type, reason, status) VALUES (?, ?, ?, ?, ?, ?)";
    return pdo_execute($sql, $employee_id, $start_date, $end_date, $type, $reason, $status);
}

function updateRequest($id, $employee_id, $start_date, $end_date, $type, $reason, $status)
{
    $sql = "UPDATE leave_request SET employee_id = ?, start_date = ?, end_date = ?, type = ?, reason = ?, status = ? WHERE id = ?";
    return pdo_execute($sql, $employee_id, $start_date, $end_date, $type, $reason, $status, $id);
}

function deleteRequest($id)
{
    $sql = "DELETE FROM leave_request WHERE id = ?";
    pdo_execute($sql, $id);
}

function getRequestByEmployeeId($employee_id)
{
    $sql = "SELECT * FROM leave_request WHERE employee_id = $employee_id";
    return pdo_query($sql);
}


