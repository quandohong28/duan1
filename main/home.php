<div class="row">
	<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
							<h5 class="font-weight-bolder mb-0">
								$53,000
								<span class="text-success text-sm font-weight-bolder">+55%</span>
							</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
							<h5 class="font-weight-bolder mb-0">
								2,300
								<span class="text-success text-sm font-weight-bolder">+3%</span>
							</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
							<h5 class="font-weight-bolder mb-0">
								+3,462
								<span class="text-danger text-sm font-weight-bolder">-2%</span>
							</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
							<h5 class="font-weight-bolder mb-0">
								$103,430
								<span class="text-success text-sm font-weight-bolder">+5%</span>
							</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row my-4">
	<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
		<div class="card">
			<div class="card-header pb-0">
				<div class="row">
					<div class="col-lg-6 col-7">
						<h6>Chức năng</h6>
						<p class="text-sm mb-0">
							<i class="fa fa-check text-info" aria-hidden="true"></i>
							<span class="font-weight-bold ms-1">18 Chức năng</span>
						</p>
					</div>
					<div class="col-lg-6 col-5 my-auto text-end">
						<div class="dropdown float-lg-end pe-4">
							<a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-ellipsis-v text-secondary"></i>
							</a>
							<ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
								<li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
								<li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
								<li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="p-5 row gap-5 justify-content-center">
				<?php
				$bg = array('bg-gradient-primary', 'bg-gradient-danger', 'bg-gradient-info', 'bg-gradient-success', 'bg-gradient-warning', 'bg-gradient-dark', 'bg-gradient-secondary');
				$features = [
					[
						'name' => 'Trang chủ',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Phê duyệt',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Chấm công',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Lịch',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Sơ đồ tổ chức',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Giao tiếp',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Danh sách nhân sự',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Chức vụ',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Phòng ban',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Team',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Team của tôi',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Khen thưởng và kỷ luật',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Điều động nhân sự',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Chế độ phúc lợi',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Đánh giá hiệu suất',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Thống kê',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Hồ sơ cá nhân',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Mô tả công việc',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Team của tôi',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Phiếu báo lương',
						'icon' => 'fa fa-check'
					],
					[
						'name' => 'Phúc lợi',
						'icon' => 'fa fa-check'
					]

				];
				foreach ($features as $feature) :
					$rand = rand(0, count($bg) - 1);
				?>
					<a href="" class="<?= $bg[$rand] ?> text-center col-3 p-3 gap-2 shadow rounded d-flex flex-column justify-content-center align-items-center">
						<div class="icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center text-primary">
							<i class="<?= $feature['icon']?>"></i>
						</div>
						<p class="card-text text-white"><?= $feature['name']?></p>
					</a>
				<?php endforech ?>
				<a href="" class="text-center col-3 p-3 gap-2 shadow bg-gradient-light rounded d-flex flex-column justify-content-center align-items-center">
					<div class="icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center text-primary">
						<i class="fa fa-check"></i>
					</div>
					<p class="card-text text-dark">Thêm mới</p>
				</a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="card h-100">
			<div class="card-header pb-0">
				<h6>Orders overview</h6>
				<p class="text-sm">
					<i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
					<span class="font-weight-bold">24%</span> this month
				</p>
			</div>
			<div class="card-body p-3">
				<div class="timeline timeline-one-side">
					<div class="timeline-block mb-3">
						<span class="timeline-step">
							<i class="ni ni-bell-55 text-success text-gradient"></i>
						</span>
						<div class="timeline-content">
							<h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
							<p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
						</div>
					</div>
					<div class="timeline-block mb-3">
						<span class="timeline-step">
							<i class="ni ni-html5 text-danger text-gradient"></i>
						</span>
						<div class="timeline-content">
							<h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
							<p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
						</div>
					</div>
					<div class="timeline-block mb-3">
						<span class="timeline-step">
							<i class="ni ni-cart text-info text-gradient"></i>
						</span>
						<div class="timeline-content">
							<h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
							<p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
						</div>
					</div>
					<div class="timeline-block mb-3">
						<span class="timeline-step">
							<i class="ni ni-credit-card text-warning text-gradient"></i>
						</span>
						<div class="timeline-content">
							<h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
							<p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
						</div>
					</div>
					<div class="timeline-block mb-3">
						<span class="timeline-step">
							<i class="ni ni-key-25 text-primary text-gradient"></i>
						</span>
						<div class="timeline-content">
							<h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
							<p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
						</div>
					</div>
					<div class="timeline-block">
						<span class="timeline-step">
							<i class="ni ni-money-coins text-dark text-gradient"></i>
						</span>
						<div class="timeline-content">
							<h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
							<p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>