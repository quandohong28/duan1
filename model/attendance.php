<?php

function getAllAttendance()
{
    try {
        $sql = "SELECT * FROM attendance INNER JOIN employees ON attendance.employee_id = employees.id";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getAttendanceById($id)
{
    try {
        $sql = "SELECT * FROM attendance WHERE id = $id";
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

function approveAttendance($employee_id, $approve)
{
    try {
        $sql = "UPDATE attendance SET approve = '$approve' WHERE employee_id = '$employee_id'";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}



function getAttendanceByEmployeeIdAndDate($employee_id, $date)
{
    try {
        $sql = "SELECT * FROM attendance WHERE employee_id = $employee_id AND date = '$date'";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getAllAttendanceMonth()
{
    try {
        $sql = "SELECT * FROM attendance_month";
        return pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getAttendanceMonthById($id)
{
    try {
        $sql = "SELECT * FROM attendance_month WHERE id = $id";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getCurrentCheckinTime($employee_id, $date)
{
    try {
        
        $sql = "SELECT checkin_time FROM attendance WHERE employee_id = $employee_id AND date = '$date'";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function calWorkHours($checkin, $checkout)
{
    // chỉ lấy giờ và phút
    $checkin = new DateTime("1970-01-01 " . $checkin);
    $checkout = new DateTime("1970-01-01 " . $checkout);

    // tính khoảng cách giữa 2 thời gian
    $difference = $checkin->diff($checkout);

    // chuyển đổi sang số thực
    return (float)$difference->format('%s.%F');
}
