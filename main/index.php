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
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
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
	<?php include 'layouts/sidebar.php' ?>
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
		<?php
		// include 'layouts/topbar.php'
		include 'layouts/topbar.php'
		?>
		<div class="container-fluid py-4">
			<?php
			if (isset($_GET['act'])) {
				switch ($_GET['act']) {
					case 'home':
						include_once 'pages/home.php';
						break;
					case 'notification':
						include_once 'pages/notification.php';
						break;
					case 'profile':
						$team_members = getEmployeeByTeamId($team['id']);
						include_once 'individual/profile.php';
						break;
					case 'job_desc':
						include_once 'individual/job_desc.php';
						break;
					case 'salary':
						$salaries = getSalariesByEmployeeId($_SESSION['user']['id']);
						include_once 'individual/salary/salary.php';
						break;
					case 'salary_detail':
						$salary_scale = getSalaryScaleValueByRank($employee['rank_id']);
						$salary = getSalaryById($_GET['salary_id']);

						function numberToWords($number)
						{
							$ones = array(
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
							);

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

						$real_salary = $salary_scale[0]['value'] / 26 * $salary['work_days'];
						$total_income = $real_salary + $salary_scale[1]['value'] * $real_salary / 100 + $salary_scale[2]['value'] * $real_salary / 100 + $salary_scale[4]['value'] * $real_salary / 100 + $salary_scale[5]['value'] * $real_salary / 100;
						include_once 'individual/salary/salary_detail.php';
						break;
					case 'salary_scale':
						if ($_SERVER['REQUEST_METHOD'] == 'POST') {
							$rank_id = $_POST['rank_id'];
							$salary_scale = getSalaryScaleByRank($rank_id);
						} else {
							$salary_scale = getSalaryScaleByRank(1);
						}
						include_once 'individual/salary/salary_scale.php';
						break;
					case 'benefit':
						include_once 'individual/benefit/benefit.php';
						break;
					case 'insurance':
						include_once 'individual/benefit/insurance.php';
						break;
					case 'leave_request':
						include_once 'individual/benefit/leave_request.php';
						break;
					case 'vacation':
						include_once 'individual/benefit/vacation.php';
						break;
					case 'contract':
						include_once 'individual/contract.php';
						break;
					case 'change_password':
						include_once 'individual/change_password.php';
						break;
					case 'setting':
						include_once 'individual/setting.php';
						break;
					case 'logout':
						unset($_SESSION['user']);
						header('location: ../index.php');
						break;
					case 'approve':
						include 'pages/approve/index.php';
						break;
					case 'attendance':
						$attendance = getAttendanceByEmployeeId($_SESSION['user']['id']);
						$employee_id = $_SESSION['user']['id'];
						$regulation = getTimeRegulation();
						$timezone = new DateTimeZone('Asia/Ho_Chi_Minh'); // Múi giờ Việt Nam
						$currentDateTime = new DateTime('now', $timezone);
						$currentFormattedTime = $currentDateTime->format('H:i:s');
						$currentFormattedDate = $currentDateTime->format('Y-m-d');
						$currentFormattedMonth = $currentDateTime->format("m");
						$currentFormattedYear = $currentDateTime->format("Y");
						if (isset($_POST['submit'])) {
							$method = $_POST['method'];
							if ($method == 0) {
								$checkin_date = getLatestCheckin()['date'];
								if ($currentFormattedDate == $checkin_date) {
									$message = 'Hôm nay bạn đã chấm công rồi!';
								} else {
									if ($currentFormattedTime >= $regulation['checkin_time']) {
										$message = 'Bạn đã quá giờ làm việc! Chấm công thành công!';
										$status = 'late';
										checkin($employee_id, $currentFormattedDate, $currentFormattedTime, $status);
									} else {
										$status = 'present';
										$message = 'Chấm công thành công!';
										checkin($employee_id, $currentFormattedDate, $currentFormattedTime, $status);
									}
									setWorkDays($employee_id, $currentFormattedMonth, $currentFormattedYear, $work_days);
								}
							} else {
								if ($currentFormattedTime <= $regulation['checkin_time']) {
									$message = 'Bạn đã về sớm! Chấm công thành công!';
									$status = 'late';
									checkout($currentFormattedTime);
								} else {
									$status = 'present';
									$message = 'Chấm công thành công!';
									checkout($currentFormattedTime);
								}
							}
						}
						include 'pages/attendance.php';
						break;
					case 'schedule':
						include 'pages/schedule.php';
						break;
					case 'organizational':
						$departments = getAllDepartments();
						include 'pages/organizational.php';
						break;
					case 'communicate':
						include 'pages/communicate.php';
						break;
					case 'table':
						include 'table/index.php';
						break;
					case 'reward_discipline':
						include 'utilities/reward_discipline.php';
						break;
					case 'personnel_mobilization':
						$employees = getAllEmployees();
						$teams = getAllTeams();
						$departments = getAllDepartments();
						$ranks = getAllRanks();
						include 'utilities/personnel_mobilization.php';
						break;
					case 'benefits':
						include 'utilities/benefits.php';
						break;
					case 'performance':
						include 'performance/performance.php';
						break;
					case 'performance_employee':
						include 'performance/performance_employee.php';
						break;
					case 'performance_team':
						include 'performance/performance_team.php';
						break;
					case 'performance_department':
						include 'performance/performance_department.php';
						break;
					case 'performance_company':
						include 'performance/performance_company.php';
						break;
					case 'chart':
						include 'chart/index.php';
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
							exit;
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
				<?php include 'layouts/footer.php' ?>
			</footer>
		</div>
	</main>
	<?php include 'layouts/fixed_plugin.php' ?>
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
	<script src="../assets/js/soft-ui-dashboard.min.js"></script>
	<!-- Moment.js -->
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