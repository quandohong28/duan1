<?php

function getAllTrainings()
{
    $sql = "SELECT * FROM training";
    return pdo_execute($sql);
}

function getTrainingById($id)
{
    $sql = "SELECT * FROM training WHERE id = $id";
    return pdo_query_one($sql);
}

function addTraining($employee_id, $name, $description, $start_date, $end_date, $location)
{
    $sql = "INSERT INTO training (employee_id, name, description, start_date, end_date, location) VALUES (?, ?, ?, ?, ?, ?)";
    return pdo_execute($sql, $employee_id, $name, $description, $start_date, $end_date, $location);
}

function updateTraining($id, $employee_id, $name, $description, $start_date, $end_date, $location, $status)
{
    $sql = "UPDATE training SET employee_id = ?, name = ?, description = ?, start_date = ?, end_date = ?, location = ?, status = ? WHERE id = ?";
    return pdo_execute($sql, $employee_id, $name, $description, $start_date, $end_date, $location, $status, $id);
}

function updateTrainingStatus($id, $status)
{
    $sql = "UPDATE training SET status = ? WHERE id = ?";
    return pdo_execute($sql, $status, $id);
}

function deleteTraining($id)
{
    $sql = "DELETE FROM training WHERE id = ?";
    pdo_execute($sql, $id);
}

function getTrainingByEmployeeId($employee_id)
{
    $sql = "SELECT * FROM training WHERE employee_id = $employee_id";
    return pdo_query($sql);
}
