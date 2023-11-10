<?php
function getAllNotifications()
{
    $sql = "SELECT * FROM notification";
    return pdo_execute($sql);
}

function getNotificationById($id)
{
    $sql = "SELECT * FROM notification WHERE id = $id";
    return pdo_query_one($sql);
}

function addNotification($title, $content, $employee_id, $create_at)
{
    $sql = "INSERT INTO notification (title, content, employee_id, create_at) VALUES (?, ?, ?, ?, ?)";
    return pdo_execute($sql, $title, $content, $employee_id, $create_at);
}

function updateNotification($id, $title, $content, $employee_id, $update_at)
{
    $sql = "UPDATE notification SET title = ?, content = ?, employee_id = ? update_at = ? WHERE id = ?";
    return pdo_execute($sql, $title, $content, $employee_id, $update_at, $id);
}

function deleteNotification($id)
{
    $sql = "DELETE FROM notification WHERE id = ?";
    pdo_execute($sql, $id);
}

function getNotificationByEmployeeId($employee_id)
{
    $sql = "SELECT * FROM notification WHERE employee_id = $employee_id";
    return pdo_query($sql);
}
