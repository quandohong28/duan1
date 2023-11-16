<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="mb-4">
            <h6>Điều động nhân sự</h6>
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-12 col-lg-5 p-3 shadow">
                        <span>Vị trí hiện tại</span>
                        <div class="my-3">
                            <label for="" class="form-label">Họ tên nhân sự</label>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="0">Chọn một</option>
                                <?php foreach ($employees as $employee) : ?>
                                    <option value=""><?= $employee['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Cấp bậc</label>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="0">Chọn một</option>
                                <?php foreach ($ranks as $rank) : ?>
                                    <option value=""><?= $rank['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Team</label>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="0">Chọn một</option>
                                <?php foreach ($teams as $team) : ?>
                                    <option value=""><?= $team['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phòng ban</label>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="0">Chọn một</option>
                                <?php foreach ($departments as $department) : ?>
                                    <option value=""><?= $department['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="reset" class="btn btn-sm btn-outline-dark">Mặc định</button>
                        </div>
                        <caption>
                            <small class="text-danger">Bạn cần chọn chính xác thông tin của vị trí hiện tại mới có thể thực hiện việc Điều động nhân sự!</small>
                        </caption>
                    </div>
                    <div class="col text-center pt-5">
                        <span class="fs-1 text-info d-lg-block d-sm-none">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        <span class="fs-1 text-info d-lg-none d-sm-block">
                            <i class="fa-solid fa-arrow-down"></i>
                        </span>
                    </div>
                    <div class="col-sm-12 col-lg-5 p-3 shadow">
                        <span>Vị trí được điều động</span>
                        <div class="my-3">
                            <label for="" class="form-label">Cấp bậc</label>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="0">Chọn một</option>
                                <?php foreach ($ranks as $rank) : ?>
                                    <option value=""><?= $rank['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Team</label>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="0">Chọn một</option>
                                <?php foreach ($teams as $team) : ?>
                                    <option value=""><?= $team['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phòng ban</label>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="0">Chọn một</option>
                                <?php foreach ($departments as $department) : ?>
                                    <option value=""><?= $department['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="reset" class="btn btn-sm btn-outline-dark">Mặc định</button>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-success">Xác nhận</button>
                        </div>
                        <caption>
                            <small>Điều động nhân sự là hành động vô cùng quan trọng! Cần thực hiện công việc một cách chính xác</small>
                        </caption>
                    </div>
                </div>
            </form>
        </div>

        <div class="mb-4">
            <h6>Lịch sử Điều động nhân sự</h6>
            <small>Tính năng đang phát triển</small>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default no-border">
                    <div class="panel-body">

                        <form role="form" class="filter-panel">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Cấp bậc</label>
                                    <select class="form-control">
                                        <option value="0">Tất cả</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Phòng Ban</label>
                                    <select class="form-control">
                                        <option value="0">Tất cả</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Team</label>
                                    <select class="form-control">
                                        <option value="0">Tất cả</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 form-group">
                                    <button type="submit" class="btn btn-sm btn-info me-3">
                                        <i class="fa fa-search fs-6 me-2"></i>
                                        <span>Tìm kiếm</span>
                                    </button>
                                    <button type="reset" class="btn btn-sm btn-default">
                                        Mặc định
                                    </button>
                                </div>
                                <div class="col-md-2 form-group text-end">
                                    <button type="submit" class="btn btn-sm btn-success me-3">
                                        <i class="fa-regular fa-file-excel fs-6 me-2"></i>
                                        <span>Xuất</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>
                                            <input class="select-all-checkboxes" type="checkbox">
                                        </td>
                                        <td class="fw-bold">ID</td>
                                        <td class="fw-bold">Ngày Bổ nhiệm / Điều động</td>
                                        <td class="fw-bold">Họ và tên</td>
                                        <td class="fw-bold">Các thông tin điều chỉnh</td>
                                        <td class="fw-bold">Chi tiết</td>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>
                                            <input class="select-all-checkboxes" type="checkbox">
                                        </td>
                                        <td class="fw-bold">ID</td>
                                        <td class="fw-bold">Ngày Bổ nhiệm / Điều động</td>
                                        <td class="fw-bold">Họ và tên</td>
                                        <td class="fw-bold">Các thông tin điều chỉnh</td>
                                        <td class="fw-bold">Chi tiết</td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class="" name="checkbox" value="<?= $id ?>" type="checkbox">
                                        </td>
                                        <td>1</td>
                                        <td>23/11/2023</td>
                                        <td>Đỗ Hồng Quân</td>
                                        <td>Team / Phòng ban / Cấp bậc</td>
                                        <!-- Xem chi tiết -->
                                        <td>
                                            <button class="btn bg-gradient-info btn-sm m-0 mx-1 px-4" data-bs-toggle="modal" data-bs-target="#" data-bs-data=''>
                                                <i class="fa-solid fa-circle-info fs-6"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <ul class="pagination pagination-sm no-border">
                            <li class="page-item">
                                <a class="page-link" href="#">«</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">»</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</section>