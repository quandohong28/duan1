<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: ../index.php');
}

include_once '../model/pdo.php';
include_once '../model/employee.php';
include_once '../model/team.php';
include_once '../model/department.php';
include_once '../model/time_regulations.php';
include_once '../model/attendance.php';
include_once '../model/salary.php';
include_once '../model/rank.php';
include_once '../model/notification.php';
include_once '../model/leave_request.php';

include_once 'permission.php';

$employee = getEmployeeInfoDetail($_SESSION['user']['id']);
// var_dump($employee);
$team = getTeamByEmployeeId($_SESSION['user']['id']);

$avatar_path = '../assets/img/';
$image_path = '../assets/img/';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>QHR Master</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />

</head>

<body class="g-sidenav-show bg-gray-100 small">
    <?php include 'layouts/sidebar.php'; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php
        $notifications = getNotificationByEmployeeIdAndStatus($_SESSION['user']['id'], 'unread');
        include 'layouts/topbar.php';
        ?>
        <div class="container-fluid py-4">
            <?php
            if (isset($_GET['act'])) {
                switch ($_GET['act']) {
                    case 'home':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include_once 'pages/home.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'notification':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            $notifications = getNotificationByEmployeeId($_SESSION['user']['id']);
                            include_once 'pages/notification.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'profile':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            $team_members = getEmployeeByTeamId($team['id']);
                            include_once 'individual/profile.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'job_desc':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include_once 'individual/job_desc.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'salary':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            $salaries = getSalariesByEmployeeId($_SESSION['user']['id']);
                            include_once 'individual/salary/salary.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'salary_detail':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            $salary_scale = getSalaryScaleValueByRank($employee['rank_id']);
                            $salary = getSalaryById($_GET['salary_id']);
                            $real_salary = ($salary_scale[0]['value'] / 26) * $salary['work_days'];
                            $total_income = $real_salary + ($salary_scale[1]['value'] * $real_salary) / 100 + ($salary_scale[2]['value'] * $real_salary) / 100 + ($salary_scale[4]['value'] * $real_salary) / 100 + ($salary_scale[5]['value'] * $real_salary) / 100;
                            include_once 'individual/salary/salary_detail.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'salary_scale':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $rank_id = $_POST['rank_id'];
                                $salary_scale = getSalaryScaleByRank($rank_id);
                            } else {
                                $salary_scale = getSalaryScaleByRank(1);
                            }
                            include_once 'individual/salary/salary_scale.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'benefit':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include_once 'individual/benefit/benefit.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'insurance':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include_once 'individual/benefit/insurance.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'leave_request':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            $employee_id = $_SESSION['user']['id'];
                            $leave_requests = getRequestByEmployeeId($employee_id);

                            include_once 'individual/benefit/leave_request.php';

                            // xử lý thêm một request mới
                            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_submit'])) {
                                $time_start = $_POST['time_start'];
                                $time_end = $_POST['time_end'];
                                $reason = $_POST['reason'];
                                addRequest($employee_id, $time_start, $time_end, $reason, $status = 'Pending');
                                echo '<meta http-equiv="refresh" content="0;url=?act=leave_request">';
                            }

                            // xử lý sửa một request
                            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_submit'])) {
                                $request_id = $_POST['request_id'];
                                $time_start = $_POST['time_start'];
                                $time_end = $_POST['time_end'];
                                $reason = $_POST['reason'];
                                editRequest($request_id, $time_start, $time_end, $reason);
                                echo '<meta http-equiv="refresh" content="0;url=?act=leave_request">';
                            }

                            // xử lý hủy một request
                            if (isset($_GET['controller']) && $_GET['controller'] == 'cancel') {
                                $request_id = $_GET['request_id'];
                                $status = 'Cancelled';
                                cancelRequest($request_id, $status);
                                echo '<meta http-equiv="refresh" content="0;url=?act=leave_request">';
                            }
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'vacation':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include_once 'individual/benefit/vacation.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'contract':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include_once 'individual/contract.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'change_password':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include_once 'individual/change_password.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'setting':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include_once 'individual/setting.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'logout':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            unset($_SESSION['user']);
                            echo '<meta http-equiv="refresh" content="0;url=../index.php">';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'approve':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'pages/approve/index.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'attendance':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            $attendance = getAttendanceByEmployeeId($_SESSION['user']['id']);
                            $employee_id = $_SESSION['user']['id'];
                            $regulation = getTimeRegulation();
                            $timezone = new DateTimeZone('Asia/Ho_Chi_Minh'); // Múi giờ Việt Nam
                            $currentDateTime = new DateTime('now', $timezone);
                            $currentFormattedTime = $currentDateTime->format('H:i:s');
                            $currentFormattedDate = $currentDateTime->format('Y-m-d');
                            $currentFormattedMonth = $currentDateTime->format('m');
                            $currentFormattedYear = $currentDateTime->format('Y');
                            if (isset($_POST['submit'])) {
                                $method = $_POST['method'];
                                $checkin_date = getLatestCheckin()['date'];
                                if ($method == 0) {
                                    if ($currentFormattedDate == $checkin_date) {
                                        $message = 'Hôm nay bạn đã chấm công rồi!';
                                    } else {
                                        if ($currentFormattedTime >= $regulation['checkin_time']) {
                                            $message = 'Bạn đã quá giờ làm việc! Chấm công thành công!';
                                            $status = 'Late';
                                            checkin($employee_id, $currentFormattedDate, $currentFormattedTime, $status);
                                        } else {
                                            $status = 'Present';
                                            $message = 'Chấm công thành công!';
                                            checkin($employee_id, $currentFormattedDate, $currentFormattedTime, $status);
                                        }
                                    }
                                } else {
                                    if (getLatestCheckin()) {
                                        if ($currentFormattedTime <= $regulation['checkin_time']) {
                                            $message = 'Bạn đã về sớm! Chấm công thành công!';
                                            $status = 'Late';
                                            checkout($currentFormattedTime);
                                        } else {
                                            $status = 'present';
                                            $message = 'Chấm công thành công!';
                                            checkout($currentFormattedTime);
                                        }
                                    } else {
                                        $message = 'Bạn chưa chấm công vào hôm nay!';
                                    }
                                }
                            }
                            include 'pages/attendance.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'schedule':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'pages/schedule.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'organizational':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            $departments = getAllDepartments();
                            include 'pages/organizational.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'communicate':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'pages/communicate.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'table':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'table/index.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'reward_discipline':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'utilities/reward_discipline.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'personnel_mobilization':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            $employees = getAllEmployees();
                            $teams = getAllTeams();
                            $departments = getAllDepartments();
                            $ranks = getAllRanks();
                            include 'utilities/personnel_mobilization.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'benefits':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'utilities/benefits.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'performance':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'performance/performance.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'performance_employee':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'performance/performance_employee.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'performance_team':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'performance/performance_team.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'performance_department':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'performance/performance_department.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'performance_company':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'performance/performance_company.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'chart':
                        if (hasPermission($_SESSION['user']['id'], $_GET['act'])) {
                            include 'chart/index.php';
                        } else {
                            include_once 'pages/permission_denied.php';
                        }
                        break;
                    case 'download':
                        $data = $_GET['data'];
                        $file = $_GET['file'];
                        $filepath = '../assets/files/' . $data . '/' . $file;
                        if (file_exists($filepath)) {
                            header('Content-Description: File Transfer');
                            header('Content-Type: application/octet-stream');
                            header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
                            header('Expires: 0');
                            header('Cache-Control: must-revalidate');
                            header('Pragma: public');
                            header('Content-Length: ' . filesize($filepath));
                            readfile($filepath);
                            exit();
                        }
                        break;
                    default:
                        include 'pages/home.php';
                        break;
                }
            } else {
                include 'pages/home.php';
            }
            ?>
            <footer class="footer p-3">
                <?php include 'layouts/footer.php'; ?>
            </footer>
        </div>
    </main>
    <?php include 'layouts/fixed_plugin.php'; ?>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.js"></script>
    <script src="../assets/js/moment.js"></script>
    <script>
        // Lấy tất cả các liên kết trong menu
        var menuLinks = document.querySelectorAll('.nav-link');

        // Lặp qua từng liên kết và kiểm tra URL hiện tại
        for (var i = 0; i < menuLinks.length; i++) {
            // Lấy href của liên kết
            var href = menuLinks[i].getAttribute('href');
            // Kiểm tra xem URL hiện tại có chứa href của liên kết hay không
            if (window.location.href.indexOf(href) !== -1) {
                // Nếu có, thêm lớp "active" vào liên kết
                menuLinks[i].classList.add('active');
            } else {
                menuLinks[i].classList.remove('active');
            }
        }
    </script>
</body>

</html>