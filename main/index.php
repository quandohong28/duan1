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
		<?php include 'layouts/topbar.php' ?>
		<div class="container-fluid py-4">
			<?php
			if (isset($_GET['act'])) {
				switch ($_GET['act']) {
					case 'home':
						include 'pages/home.php';
						break;
					case 'notification':
						include 'pages/notification.php';
						break;
					case 'profile':
						include 'pages/individual/profile.php';
						break;
					case 'job_desc':
						include 'pages/individual/job_desc.php';
						break;
					case 'myteam':
						include 'pages/individual/myteam.php';
						break;
					case 'salary':
						include 'pages/individual/salary.php';
						break;
					case 'benefit':
						include 'pages/individual/benefit.php';
						break;
					case 'change_password':
						include 'individual/change_password.php';
						break;
					case 'setting':
						include 'individual/setting.php';
						break;
					case 'logout':
						include 'individual/logout.php';
						break;
					case 'approve':
						include 'pages/approve.php';
						break;
					case 'attendance':
						include 'pages/attendance.php';
						break;
					case 'schedule':
						include 'pages/schedule.php';
						break;
					case 'organizational':
						include 'pages/organizational.php';
						break;
					case 'communicate':
						include 'pages/communicate.php';
						break;
					case 'table':
						include 'table/index.php';
						break;
					case 'reward_discipline':
						include 'pages/reward_discipline.php';
						break;
					case 'personnel_mobilization':
						include 'pages/personnel_mobilization.php';
						break;
					case 'benefits':
						include 'pages/benefits.php';
						break;
					case 'performance_evaluation':
						include 'pages/performance_evaluation.php';
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