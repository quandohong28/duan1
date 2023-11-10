<?php

function getAllAttendance()
{
    try {
        $sql = "SELECT * FROM attendance";
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

function addAttendance($employee_id, $date, $time_in, $time_out, $status)
{
    try {
        $sql = "INSERT INTO attendance (employee_id, date, time_in, time_out, status) VALUES (?, ?, ?, ?, ?)";
        return pdo_execute($sql, $employee_id, $date, $time_in, $time_out, $status);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function updateAttendance($id, $employee_id, $date, $time_in, $time_out, $status)
{
    try {
        $sql = "UPDATE attendance SET employee_id = ?, date = ?, time_in = ?, time_out = ?, status = ? WHERE id = ?";
        return pdo_execute($sql, $employee_id, $date, $time_in, $time_out, $status, $id);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function deleteAttendance($id)
{
    try {
        $sql = "DELETE FROM attendance WHERE id = ?";
        pdo_execute($sql, $id);
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
