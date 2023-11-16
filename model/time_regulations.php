<?php
function getTimeRegulation()
{
    try {
        $sql = "SELECT * FROM time_regulations";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
