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

function calTime($time_in, $time_out)
{
    try {
        $time_in = strtotime($time_in);
        $time_out = strtotime($time_out);
        $time = $time_out - $time_in;
        $hour = floor($time / 3600);
        $minute = floor(($time - $hour * 3600) / 60);
        $second = $time - $hour * 3600 - $minute * 60;
        return $hour . ":" . $minute . ":" . $second;
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function addAttendanceMonth($employee_id, $month, $year, $total_time)
{
    try {
        $sql = "INSERT INTO attendance_month (employee_id, month, year, total_time) VALUES (?, ?, ?, ?)";
        return pdo_execute($sql, $employee_id, $month, $year, $total_time);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function setWorkDays($employee_id, $month, $year, $work_days)
{
    try {
        $sql = "UPDATE attendance_month SET work_days = ? WHERE employee_id = ? AND month = ? AND year = ?";
        return pdo_execute($sql, $work_days, $employee_id, $month, $year);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function setWorkHours($employee_id, $month, $year, $work_hours)
{
    try {
        $sql = "UPDATE attendance_month SET work_hours = ? WHERE employee_id = ? AND month = ? AND year = ?";
        return pdo_execute($sql, $work_hours, $employee_id, $month, $year);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function setOvertimeHours($employee_id, $month, $year, $overtime_hours)
{
    try {
        $sql = "UPDATE attendance_month SET overtime_hours = ? WHERE employee_id = ? AND month = ? AND year = ?";
        return pdo_execute($sql, $overtime_hours, $employee_id, $month, $year);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function setLeaveHours($employee_id, $month, $year, $leave_hours)
{
    try {
        $sql = "UPDATE attendance_month SET leave_hours = ? WHERE employee_id = ? AND month = ? AND year = ?";
        return pdo_execute($sql, $leave_hours, $employee_id, $month, $year);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
