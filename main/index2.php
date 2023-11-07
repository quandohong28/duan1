<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Light Admin - Bootstrap Admin Template</title>

	<link rel="shortcut icon" type="image/ico" href="../assets/images/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0" />

	<!-- Main style -->
	<link href="../assets/css/styles.min.css" rel="stylesheet">
	<link href="../assets/css/style-default.min.css" rel="stylesheet">
</head>

<body class="with-overlay-scrollbars">
	<div id="wrapper" class="fixed-sidebar fixed-topbar">

		<!-- Topbar -->
		<?php include 'layouts/topbar.php' ?>

		<!-- Sidebar -->
		<?php include 'layouts/sidebar.php' ?>


		<div id="page-wrapper">
			<?php
			if (isset($_GET['act'])) {
				switch ($_GET['act']) {
					case 'home':
						include 'home.php';
						break;
					case 'notification':
						include 'notification.php';
						break;
					case 'profile':
						include 'individual/profile.php';
						break;
					case 'job_desc':
						include 'individual/job_desc.php';
						break;
					case 'my_team':
						include 'individual/my_team.php';
						break;
					case 'salary':
						include 'individual/salary.php';
						break;
					case 'benefit':
						include 'individual/benefit.php';
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
						include 'approve.php';
						break;
					case 'timekeeping':
						include 'timekeeping.php';
						break;
					case 'schedule':
						include 'schedule.php';
						break;
					case 'organizational':
						include 'organizational.php';
						break;
					case 'table':
						include 'table.php';
						break;
					case 'reward_discipline':
						include 'reward_discipline.php';
						break;
					case 'personnel_mobilization':
						include 'personnel_mobilization.php';
						break;
					case 'benefits':
						include 'benefits.php';
						break;
					case 'performance_evaluation':
						include 'performance_evaluation.php';
						break;
					case 'communicate':
						include 'communicate.php';
						break;
					default:
						include 'home.php';
						break;
				}
			} else {
				include 'home.php';
			}
			?>
		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->


	<div class="bottom-buttons">
		<a class="scroll-to-top"><i class="ti-angle-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Metis Menu -->
	<script src="../assets/vendor/metisMenu/metisMenu.min.js"></script>

	<!-- OverlayScrollbars -->
	<script src="../assets/vendor/overlayscrollbars/jquery.overlayScrollbars.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Moment.js (for Bootstrap Datetimepicker & Chart.js) -->
	<script src="../assets/vendor/moment/moment.min.js"></script>

	<!-- Bootstrap Datetimepicker -->
	<script src="../assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Select2 -->
	<script src="../assets/vendor/select2/js/select2.min.js"></script>

	<!-- Chart.js -->
	<script src="../assets/vendor/chart.js/Chart.min.js"></script>

	<!-- Lightbox -->
	<script src="../assets/vendor/lightbox2/lightbox.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../assets/js/light-admin.js"></script>


</body>

</html>