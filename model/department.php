<?php

function getAllDepartments()
{
    $sql = "SELECT * FROM departments;";
    return pdo_query($sql);
}

function getDepartmentById($id)
{
    $sql = "SELECT * FROM departments WHERE id = '$id';";
    return pdo_query_one($sql);
}

function updateDepartment()
{
    
}
