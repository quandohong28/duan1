<?php

function getAllRequests()
{
    $sql = 'SELECT * FROM leave_requests';
    return pdo_query($sql);
}

function getRequestById($id)
{
    $sql = "SELECT * FROM leave_request WHERE id = '$id';";
    return pdo_query_one($sql);
}

function addRequest($employee_id, $start_date, $end_date, $reason, $status)
{
    try {
        $sql = "INSERT INTO leave_requests (employee_id, start_date, end_date, reason, status) VALUES ('$employee_id', '$start_date', '$end_date', '$reason', '$status')";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function updateRequest($id, $employee_id, $start_date, $end_date, $reason, $status)
{
    $sql = 'UPDATE leave_request SET employee_id = ?, start_date = ?, end_date = ?, reason = ?, status = ? WHERE id = ?';
    return pdo_execute($sql, $employee_id, $start_date, $end_date, $reason, $status, $id);
}

function deleteRequest($id)
{
    $sql = 'DELETE FROM leave_request WHERE id = ?';
    pdo_execute($sql, $id);
}

function getRequestByEmployeeId($employee_id)
{
    $sql = "SELECT * FROM leave_requests WHERE employee_id = $employee_id";
    return pdo_query($sql);
}
