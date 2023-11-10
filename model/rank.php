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
