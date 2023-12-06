<?php

$permissions = [
    'director' => [
        'home',
        'notification',
        'profile',
        'job_desc',
        'salary',
        'salary_detail',
        'salary_scale',
        'benefit',
        'insurance',
        'leave_request',
        'vacation',
        'contract',
        'change_password',
        'setting',
        'logout',
        'approve',
        'attendance',
        'schedule',
        'organizational',
        'communicate',
        'table',
        'reward_discipline',
        'personnel_mobilization',
        'benefits',
        'performance',
        'performance_employee',
        'performance_team',
        'performance_department',
        'performance_company',
        'chart',
        'download'
    ],
    'manager' => [
        'home',
        'notification',
        'profile',
        'job_desc',
        'salary',
        'salary_detail',
        'salary_scale',
        'benefit',
        'insurance',
        'leave_request',
        'vacation',
        'contract',
        'change_password',
        'setting',
        'logout',
        'approve',
        'attendance',
        'schedule',
        'organizational',
        'communicate',
        'table',
        'reward_discipline',
        'personnel_mobilization',
        'benefits',
        'performance',
        'performance_employee',
        'performance_team',
        'chart',
        'download'
    ],
    'staff' => [
        'home',
        'notification',
        'profile',
        'job_desc',
        'salary',
        'salary_detail',
        'salary_scale',
        'benefit',
        'insurance',
        'leave_request',
        'vacation',
        'contract',
        'change_password',
        'setting',
        'logout',
        'attendance',
        'schedule',
        'organizational',
        'communicate',
        'reward_discipline',
        'performance',
        'chart',
        'download'
    ],
    'teamlead' => [
        'home',
        'notification',
        'profile',
        'job_desc',
        'salary',
        'salary_detail',
        'salary_scale',
        'benefit',
        'insurance',
        'leave_request',
        'vacation',
        'contract',
        'change_password',
        'setting',
        'logout',
        'approve',
        'attendance',
        'schedule',
        'organizational',
        'communicate',
        'reward_discipline',
        'performance',
        'performance_employee',
        'chart',
        'download'
    ],
];

function hasPermission($userId, $action)
{
    // Giả sử có một hàm nào đó để lấy thông tin về vai trò và quyền hạn của người dùng từ cơ sở dữ liệu
    $userPermissions = getPermissionsForUser($userId);

    // Kiểm tra xem hành động có tồn tại trong mảng quyền hạn không
    if (isset($userPermissions) && is_array($userPermissions) && in_array($action, $userPermissions)) {
        return true;
    }
    
    return false;
}


function getPermissionsForUser($userId)
{
    $rank = strtolower(getEmployeeRankById($userId)['rank']);
    global $permissions;
    $userPermissions = $permissions[$rank];
    return $userPermissions;
}
