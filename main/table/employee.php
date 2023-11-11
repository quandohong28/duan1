<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default no-border">
            <div class="panel-body">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addemployeemodal">
                    <i class="fa fa-square-plus fs-6 me-2"></i>
                    <span>Thêm mới</span>
                </button>

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
                                <?php foreach ($ranks as $rank) : extract($rank) ?>
                                    <option value="<?= $id ?>"><?= $description ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Phòng Ban</label>
                            <select class="form-control">
                                <option value="0">Tất cả</option>
                                <?php foreach ($departments as $department) : extract($department) ?>
                                    <option value="<?= $id ?>"><?= $name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Team</label>
                            <select class="form-control">
                                <option value="0">Tất cả</option>
                                <?php foreach ($teams as $team) : extract($team) ?>
                                    <option value="<?= $id ?>"><?= $name ?></option>
                                <?php endforeach ?>
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
                                <td class="fw-bold">Họ và tên</td>
                                <td class="fw-bold">Ngày sinh</td>
                                <td class="fw-bold">Ngày vào công ty</td>
                                <td class="fw-bold">Số tháng làm việc</td>
                                <td class="fw-bold">Chức danh</td>
                                <td class="fw-bold text-end">Hành động</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employees as $employee) :
                                extract($employee);
                                $employee_contactinfomation = getContactInfoByEmployeeId($id); ?>
                                <tr>
                                    <td>
                                        <input class="" name="checkbox" value="<?= $id ?>" type="checkbox">
                                    </td>
                                    <td><?= $id ?></td>
                                    <td><?= $name ?></td>
                                    <td><?= $birthdate ?></td>
                                    <td><?= $start_date ?></td>
                                    <td><?= $work_months ?></td>
                                    <td><?= $job_title ?></td>
                                    <td class="text-end">
                                        <!-- Xem chi tiết -->
                                        <button class="btn bg-gradient-info btn-sm m-0 mx-1 px-4" data-bs-toggle="modal" data-bs-target="#employeesinfomodal" data-bs-data='<?= json_encode($employee_contactinfomation) ?>'>
                                            <i class="fa-solid fa-circle-info fs-6"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

                <ul class="pagination pagination-sm no-border">
                    <li class="page-item">
                        <a class="page-link" href="#">«</a>
                    </li>
                    <li class="page-item active">
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

<!-- Modal -->
<?php include 'modals/employeesinfomodal.php' ?>
<?php include 'modals/addemployeemodal.php' ?>