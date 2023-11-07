<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
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
					<h2 class="fw-bold">Đăng ký</h2>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 col-xl-4">
					<div class="card">
						<div class="card-body text-center d-flex flex-column align-items-center">
							<div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
									<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
									</path>
								</svg>
							</div>
							<form method="post" action="./index.php?act=signup" data-bs-theme="light">
								<div class="mb-3">
									<input class="form-control" type="email" name="email" placeholder="Email">
								</div>
								<div class="mb-3">
									<input class="form-control" type="text" name="username" placeholder="Tên đăng nhập">
								</div>
								<div class="mb-3">
									<input class="form-control" type="password" name="password" placeholder="Mật khẩu">
								</div>
								<div class="mb-3">
									<input class="form-control" type="password" name="conf_pass" placeholder="Nhập lại mật khẩu">
								</div>
								<div class="mb-3">
									<button class="btn btn-primary shadow d-block w-100" type="submit">Đăng ký</button>
								</div>
							</form>
							<p class="text-muted">Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

</html>