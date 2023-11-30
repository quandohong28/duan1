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

function editRequest($request_id, $time_start, $time_end, $reason) {
    $sql = "UPDATE leave_requests SET time_start = '$time_start', time_end = '$time_end', reason = '$reason', status = 'Pending' WHERE id = '$request_id'";
    echo $sql;die;
    return pdo_execute($sql);
}

function cancelRequest($id)
{
    $sql = "UPDATE leave_requests SET status = 'Cancelled' WHERE id = '$id'";
    return pdo_execute($sql);
}

function getRequestByEmployeeId($employee_id)
{
    $sql = "SELECT * FROM leave_requests WHERE employee_id = $employee_id";
    return pdo_query($sql);
}
