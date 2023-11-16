<?php
function getAllNotifications()
{
    $sql = "SELECT * FROM notifications";
    return pdo_execute($sql);
}

function getNotificationById($id)
{
    $sql = "SELECT * FROM notifications WHERE id = $id";
    return pdo_query_one($sql);
}

function addNotification($title, $content, $employee_id, $create_at)
{
    $sql = "INSERT INTO notifications (title, content, employee_id, create_at) VALUES (?, ?, ?, ?, ?)";
    return pdo_execute($sql, $title, $content, $employee_id, $create_at);
}

function updateNotification($id, $title, $content, $employee_id, $update_at)
{
    $sql = "UPDATE notifications SET title = ?, content = ?, employee_id = ? update_at = ? WHERE id = ?";
    return pdo_execute($sql, $title, $content, $employee_id, $update_at, $id);
}

function deleteNotification($id)
{
    $sql = "DELETE FROM notifications WHERE id = ?";
    pdo_execute($sql, $id);
}

function getNotificationByEmployeeId($employee_id)
{
    $sql = "SELECT * FROM notifications WHERE employee_id = $employee_id";
    return pdo_query($sql);
}

function getNotificationByEmployeeIdAndStatus($employee_id, $status)
{
    try {
        $sql = "SELECT * FROM notifications WHERE employee_id = $employee_id AND status = '$status'";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
