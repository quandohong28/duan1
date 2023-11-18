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

function numberToWords($number)
{
    $ones = [
        0 => 'không',
        1 => 'một',
        2 => 'hai',
        3 => 'ba',
        4 => 'bốn',
        5 => 'năm',
        6 => 'sáu',
        7 => 'bảy',
        8 => 'tám',
        9 => 'chín'
    ];

    $number = abs(intval($number));

    if ($number == 0) {
        return $ones[0];
    }

    $result = '';

    // Đọc hàng triệu
    if ($number >= 1000000) {
        $result .= numberToWords(floor($number / 1000000)) . ' triệu ';
        $number %= 1000000;
    }

    // Đọc hàng nghìn
    if ($number >= 1000) {
        $result .= numberToWords(floor($number / 1000)) . ' nghìn ';
        $number %= 1000;
    }

    // Đọc hàng trăm
    if ($number >= 100) {
        $result .= $ones[floor($number / 100)] . ' trăm ';
        $number %= 100;
    }

    // Đọc hàng chục
    if ($number >= 10 && $number <= 19) {
        $result .= 'mười ';
        $number %= 10;
    } elseif ($number >= 20) {
        $result .= $ones[floor($number / 10)] . ' mươi ';
        $number %= 10;
    }

    // Đọc hàng đơn vị
    if ($number > 0) {
        $result .= $ones[$number];
    }

    return $result;
}
