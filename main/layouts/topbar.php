<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
	<div class="container-fluid py-1 px-3">
		<h6 class="font-weight-bolder mb-0">Xin chào!</h6>
		<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
			<div class="ms-md-auto pe-md-3 d-flex align-items-center">
				<button type="button" class="btn btn-outline-secondary mb-0 px-lg-5 px-sm-3" data-bs-toggle="modal" data-bs-target="#searchModal">
					<i class="fas fa-search fa-fw me-3"></i>
					<span class="d-sm-none d-lg-inline">Tìm kiếm ...</span>
				</button>
			</div>
			<ul class="navbar-nav justify-content-end">
				<li class="nav-item d-xl-none ps-3 d-flex align-items-center me-3">
					<a href="#" class="nav-link text-body p-0" id="iconNavbarSidenav">
						<div class="sidenav-toggler-inner">
							<i class="sidenav-toggler-line"></i>
							<i class="sidenav-toggler-line"></i>
							<i class="sidenav-toggler-line"></i>
						</div>
					</a>
				</li>
				<li class="nav-item dropdown pe-2 d-flex align-items-center">
					<a href="#" class="nav-link text-body p-0" id="dropdownNotification" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-bell cursor-pointer"></i>
					</a>
					<ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownNotification">
						<?php foreach ($notifications as $key => $value) : ?>
							<li class="mb-2">
								<a class="dropdown-item border-radius-md" href="">
									<div class="d-flex py-1">
										<div class="d-flex flex-column justify-content-center">
											<h6 class="text-sm font-weight-normal mb-1">
												<span class="font-weight-bold me-3"><?= $value['title'] ?></span>
												<small><?= $value['content'] ?></small>
											</h6>
											<p class="text-xs text-secondary mb-0 ">
												<i class="fa fa-clock me-1"></i>
												<?= $value['create_at'] ?>
											</p>
										</div>
									</div>
								</a>
							</li>
						<?php endforeach ?>
						<li class="">
							<a class="dropdown-item border-radius-md" href="?act=notification">
								Xem tất cả thông báo
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown pe-3 d-flex align-items-center ms-3">
					<a href="#" class="nav-link text-body p-0" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="rounded-circle me-2" src="<?= $avatar_path . $employee['employee_avatar'] ?>" alt="" width="40px">
						<span class="text-success"><?= $employee['employee_name'] ?></span>
					</a>
					<ul class="dropdown-menu  dropdown-menu-end  px-2 me-sm-n4" aria-labelledby="dropdownUser">
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=profile">
								Hồ sơ cá nhân
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=job_desc">
								Mô tả công việc
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=salary">
								Phiếu báo lương
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=benefit">
								Phúc lợi
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=contract">
								Hợp đồng
							</a>
						</li>
						<hr class="border-top border-dark">
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=change_password">
								<i class="fa fa-lock me-2"></i>
								Đổi mật khẩu
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=setting">
								<i class="fa fa-wrench me-2"></i>
								Thiết lập
							</a>
						</li>
						<li class="mb-2">
							<button type="button" class="dropdown-item border-radius-md text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">
								<i class="fa fa-right-from-bracket me-2"></i>
								Đăng xuất
							</button>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- Button trigger modal -->


<!-- searchModal -->
<div class="modal fade modal-xl" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalTitleId">Tìm kiếm</h6>
			</div>
			<form action="">
				<div class="modal-body min-vh-70">
					<div class="container-fluid">
						<div class="input-group mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Tìm thứ gì đó...">
							<button class="btn btn-outline-success mb-0" type="submit" id="button-addon2">Tìm kiếm</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Đóng</button>
				</div>
			</form>
		</div>
	</div>
</div>



<!-- logoutModal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="logoutModal">Đăng xuất</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid my-3">
					Nhấn nút đăng xuất để thoát khỏi phiên làm việc hiện tại
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
				<a href="?act=logout" class="btn btn-danger">Đăng xuất</a>
			</div>
		</div>
	</div>
</div>


<script>
	var searchModal = document.getElementById('searchModal');

	searchModal.addEventListener('show.bs.modal', function(event) {
		// Button that triggered the modal
		let button = event.relatedTarget;
		// Extract info from data-bs-* attributes
		let recipient = button.getAttribute('data-bs-whatever');

		// Use above variables to manipulate the DOM
	});

	var searchModal = document.getElementById('searchModal');

	searchModal.addEventListener('show.bs.modal', function(event) {
		// Button that triggered the modal
		let button = event.relatedTarget;
		// Extract info from data-bs-* attributes
		let recipient = button.getAttribute('data-bs-whatever');

		// Use above variables to manipulate the DOM
	});
</script>