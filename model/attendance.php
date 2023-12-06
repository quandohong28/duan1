<?php

function getAllAttendance()
{
    try {
        $sql = "SELECT
        e.name as name,
        a.id as id,
        a.date as date,
        a.checkin_time as checkin_time,
        a.checkout_time as checkout_time,
        a.status as status,
        a.approve as approve
        FROM attendance a
        INNER JOIN
        employees e
        ON
        a.employee_id = e.id";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getAttendanceById($id)
{
    try {
        $sql = "SELECT * FROM attendance WHERE id = '$id'";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function checkin($employee_id, $date, $time_in, $status)
{
    try {
        $sql = "INSERT INTO attendance (employee_id, date, checkin_time, status) VALUES ('$employee_id', '$date', '$time_in', '$status')";
        return pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getLatestCheckin()
{
    try {
        $sql = "SELECT * FROM attendance ORDER BY id DESC LIMIT 1";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function checkout($checkout_time)
{
    try {
        $id = getLatestCheckin()['id'];
        $sql = "UPDATE attendance SET checkout_time = '$checkout_time' WHERE id = '$id'";
        return pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getAttendanceByEmployeeId($employee_id)
{
    try {
        $sql = "SELECT * FROM attendance WHERE employee_id = $employee_id";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function approveAttendance($attendance_id, $approve)
{
    try {
        $sql = "UPDATE attendance SET approve = '$approve' WHERE id = '$attendance_id'";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function calWorkHours($start_time, $end_time)
{
    // Tạo đối tượng DateTime cho hai mốc thời gian
    $start = new DateTime("1970-01-01 $start_time");
    $end = new DateTime("1970-01-01 $end_time");

    // Tính toán khoảng cách giữa hai mốc thời gian (trong giây)
    $difference = $end->getTimestamp() - $start->getTimestamp();

    // Chuyển đổi khoảng cách từ giây sang giờ (số thực)
    $hours = round($difference / 3600, 1);

    return $hours;
}

function checkApproved($employee_id, $month, $year)
{
    try {
        $sql = "SELECT * FROM salaries WHERE employee_id = '$employee_id' AND month = '$month' AND year = '$year'";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
