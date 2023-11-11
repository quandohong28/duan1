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
                            <label>Tên phòng ban</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>ID phòng ban</label>
                            <select class="form-control">
                                <option value="0">Tất cả</option>
                                <?php foreach ($departments as $department) : extract($department) ?>
                                    <option value="<?= $id ?>"><?= $id ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Người quản lý</label>
                            <select class="form-control">
                                <option value="0">Tất cả</option>
                                <?php foreach ($departments as $department) :
                                    extract($department);
                                    $manager = getEmployeeById($manager_id);
                                ?>
                                    <option value="<?= $id ?>"><?= $manager['name'] ?></option>
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
                                <td class="fw-bold">Tên phòng ban</td>
                                <td class="fw-bold">Quản lý</td>
                                <td class="fw-bold">Số Team</td>
                                <td class="fw-bold">Số nhân viên</td>
                                <td class="fw-bold text-end">Hành động</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($departments as $department) :
                                extract($department);
                                $manager = getEmployeeById($manager_id);
                                $team_number = getNumberOfTeamsByDepartment($id);
                                $employee_number = getNumberOfEmlpoyeesByDepartment($id);
                            ?>
                                <tr>
                                    <td>
                                        <input class="" name="checkbox" value="<?= $id ?>" type="checkbox">
                                    </td>
                                    <td><?= $id ?></td>
                                    <td><?= $name ?></td>
                                    <td><?= $manager['name'] ?></td>
                                    <td><?= $team_number['team_number'] ?></td>
                                    <td><?= $employee_number['employee_number'] ?></td>
                                    <td class="text-end">
                                        <!-- Xem chi tiết -->
                                        <button class="btn bg-gradient-info btn-sm m-0 mx-1 px-4" data-bs-toggle="modal" data-bs-target="#employeesinfomodal" data-bs-data='<?= json_encode($employee_contactinfomation) ?>'>
                                            <i class="fa-solid fa-circle-info fs-6"></i>
                                        </button>
                                        <!-- Chức năng -->
                                        <button class="btn bg-gradient-warning btn-sm m-0 mx-1 px-4" data-bs-toggle="modal" data-bs-target="#editrankmodal" data-bs-data='<?= json_encode($rank) ?>'>
                                            <i class="fa fa-pen-to-square fs-6"></i>
                                            <span>Sửa</span>
                                        </button>
                                        <a href="?act=del_department" onclick="return confirm('Các Team và Nhân sự liên quan sẽ bị xoá khỏi phòng ban. Bạn có chắc chắn muốn xoá?')" class="btn bg-gradient-danger btn-sm m-0 mx-1 px-4">
                                            <i class="fa fa-trash fs-6"></i>
                                            <span>Xoá</span>
                                        </a>
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