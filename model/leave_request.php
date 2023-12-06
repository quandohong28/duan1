<?php

function getAllRequests()
{
    $sql = "SELECT
    leave_requests.*,
    employees.name AS employee_name
FROM
    leave_requests
INNER JOIN employees ON employees.id = leave_requests.employee_id
WHERE leave_requests.status <> 'Cancelled';";
    return pdo_query($sql);
}

function getRequestById($id)
{
    try {
        $sql = "SELECT * FROM leave_requests WHERE id = '$id';";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
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
    $sql = "UPDATE leave_requests SET start_date = '$time_start', end_date = '$time_end', reason = '$reason', status = 'Pending' WHERE id = '$request_id'";
    return pdo_execute($sql);
}

function approveRequest($id, $status)
{
    $sql = "UPDATE leave_requests SET status = '$status' WHERE id = '$id'";
    return pdo_execute($sql);
}

function cancelRequest($id, $status)
{
    $sql = "UPDATE leave_requests SET status = '$status' WHERE id = '$id'";
    return pdo_execute($sql);
}

function getRequestByEmployeeId($employee_id)
{
    $sql = "SELECT * FROM leave_requests WHERE employee_id = $employee_id";
    return pdo_query($sql);
}
