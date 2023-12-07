<?php

function getAllAttendance()
{
    try {
        $sql = "SELECT
        a.id AS id,
        a.date AS date,
        a.checkin_time AS checkin_time,
        a.checkout_time AS checkout_time,
        a.status AS status,
        a.approve AS approve,
        a.approve_at AS approve_at,
        e_employee.name AS employee_name,
        e_approver.name AS approver_name
    FROM
        attendance a
    INNER JOIN employees e_employee ON
        a.employee_id = e_employee.id
    LEFT JOIN employees e_approver ON
        a.approver = e_approver.id;";


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
        $sql = "SELECT
    attendance.*,
    employees.name AS approver
FROM
    attendance
INNER JOIN employees ON employees.id = attendance.employee_id
WHERE
    employee_id = $employee_id";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function approveAttendance($attendance_id, $approve, $approver, $reason_reject)
{
    try {
        $sql = "UPDATE attendance SET
        approve = '$approve',
        approver = '$approver',
        reason_reject = '$reason_reject'
        WHERE id = '$attendance_id'";
        return pdo_execute($sql);
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
