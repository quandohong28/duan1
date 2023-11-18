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

function getCurrentWorkDays($employee_id, $month, $year)
{
    try {
        $sql = "SELECT work_days FROM salaries WHERE employee_id = ? AND month = ? AND year = ?";
        $result = pdo_query_one($sql, $employee_id, $month, $year);

        if ($result) {
            return $result['work_days'];
        } else {
            return 0;
        }
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function setWorkDays($employee_id, $month, $year)
{
    try {
        $sql = "UPDATE salaries SET work_days = ? WHERE employee_id = ? AND month = ? AND year = ?";
        $currentWorkDays = getCurrentWorkDays($employee_id, $month, $year);
        $work_days = $currentWorkDays + 1;

        return pdo_execute($sql, $work_days, $employee_id, $month, $year);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function setWorkHours($employee_id, $month, $year, $work_hours)
{
    try {
        
        $sql = "UPDATE salaries SET work_hours = '$work_hours' WHERE employee_id = '$employee_id' AND month = '$month' AND year = '$year'";
        return pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function setOvertimeHours($employee_id, $month, $year, $overtime_hours)
{
    try {
        $sql = "UPDATE salaries SET overtime_hours = ? WHERE employee_id = ? AND month = ? AND year = ?";
        return pdo_execute($sql, $overtime_hours, $employee_id, $month, $year);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function setLeaveHours($employee_id, $month, $year, $leave_hours)
{
    try {
        $sql = "UPDATE salaries SET leave_hours = ? WHERE employee_id = ? AND month = ? AND year = ?";
        return pdo_execute($sql, $leave_hours, $employee_id, $month, $year);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getCurrentSalary($employee_id, $month, $year)
{
    try {
        $sql = "SELECT * FROM salaries WHERE employee_id = ? AND month = ? AND year = ?";
        $result = pdo_query_one($sql, $employee_id, $month, $year);

        if ($result) {
            return $result;
        } else {
            return 0;
        }
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function addSalary($employee_id, $month, $year)
{
    if (getCurrentSalary($employee_id, $month, $year) == 0) {
        try {
            $sql = "INSERT INTO salaries (employee_id, month, year) VALUES ('$employee_id', '$month', '$year')";
            return pdo_execute($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    } else {
        return false;
    }
}
