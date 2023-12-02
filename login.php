<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<title>
		Soft UI Dashboard by Creative Tim
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="mt-5 pt-5">
	<main>
		<div class="container">
			<div class="row mb-4 mb-lg-5">
				<div class="col-md-8 col-xl-6 text-center mx-auto">
					<p class="fw-bold text-success mb-2">Chào mừng</p>
					<h2 class="fw-bold">Đăng nhập</h2>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 col-xl-4">
					<div class="card">
						<div class="card-body text-center d-flex flex-column align-items-center">
							<form method="post" data-bs-theme="light" action="account_controller.php?act=login" name="loginForm" onsubmit="return validateForm()">
								<div class="mb-3">
									<input class="form-control" type="text" name="username" id="username" placeholder="Tên đăng nhập" onfocus="hideError('usernameError')">
									<small id="usernameError" class="text-danger"></small>
								</div>
								<div class="mb-3">
									<input class="form-control" type="password" name="password" id="password" placeholder="Mật khẩu" onfocus="hideError('passwordError')">
									<small id="passwordError" class="text-danger"></small>
								</div>
								<div class="mb-3">
									<button class="btn btn-outline-primary shadow d-block w-100" name="login_submit" type="submit">Đăng nhập</button>
								</div>
							</form>


							<p class="text-muted small">Bạn quên mật khẩu? <a href="./forgot_password.php">Quên mật khẩu</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script>
		function hideError(elementId) {
			var errorElement = document.getElementById(elementId);
			if (errorElement) {
				errorElement.innerHTML = ""; // Ẩn thông báo lỗi
			}
		}

		function validateForm() {
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
			var usernameError = document.getElementById('usernameError');
			var passwordError = document.getElementById('passwordError');

			usernameError.innerHTML = ""; // Reset error message
			passwordError.innerHTML = ""; // Reset error message

			if (username.trim() === "") {
				usernameError.innerHTML = "Vui lòng nhập tên đăng nhập.";
			}

			if (password.trim() === "") {
				passwordError.innerHTML = "Vui lòng nhập mật khẩu.";
			}
		}
	</script>
</body>

</html>