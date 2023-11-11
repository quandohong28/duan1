<?php

function getAllRanks()
{
    try {
        $sql = "SELECT * FROM ranks";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

// lấy ra số lượng nhân viên theo cấp bậc
function getNumberOfEmployeesByRank($rankId)
{
    try {
        $sql = "SELECT COUNT(*) as employee_number FROM employees WHERE rank_id = $rankId";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}