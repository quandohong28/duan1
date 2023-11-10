<?php

function getAllContracts()
{
    $sql = "SELECT * FROM contract";
    return pdo_query($sql);
}

function getContractById($id)
{
    $sql = "SELECT * FROM contract WHERE id = $id";
    return pdo_query_one($sql);
}

function addContract($employee_id, $contract_type, $content, $start_date, $end_date)
{
    $sql = "INSERT INTO contract (employee_id, contract_type, content, start_date, end_date) VALUES (?, ?, ?, ?, ?)";
    return pdo_execute($sql, $employee_id, $contract_type, $content, $start_date, $end_date);
}

function updateContract($id, $employee_id, $contract_type, $content, $start_date, $end_date)
{
    $sql = "UPDATE contract SET employee_id = ?, contract_type = ?, content = ?, start_date = ?, end_date = ? WHERE id = ?";
    return pdo_execute($sql, $employee_id, $contract_type, $content, $start_date, $end_date, $id);
}

function deleteContract($id)
{
    $sql = "DELETE FROM contract WHERE id = ?";
    pdo_execute($sql, $id);
}

function getContractByEmployeeId($employee_id)
{
    $sql = "SELECT * FROM contract WHERE employee_id = $employee_id";
    return pdo_query($sql);
}
