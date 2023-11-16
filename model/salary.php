<?php

function getSalaryScaleByRank($rank_id)
{
    try {
        $sql = "SELECT * FROM salary_scales WHERE rank_id = '$rank_id'";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getSalaryScaleValueByRank($rank_id)
{
    try {
        $sql = "SELECT value FROM salary_scales WHERE rank_id = '$rank_id'";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getSalariesByEmployeeId($employee_id)
{
    try {
        $sql = "SELECT * FROM salaries WHERE employee_id = '$employee_id'";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getSalaryById($salary_id)
{
    try {
        $sql = "SELECT * FROM salaries WHERE id = '$salary_id'";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
