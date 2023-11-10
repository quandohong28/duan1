<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default no-border">
            <div class="panel-body">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal">
                    Thêm mới
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
                        <div class="col-md-12 form-group text-right">
                            <button type="submit" class="btn btn-info">
                                <span class="glyphicon glyphicon-search"></span>
                                Tìm kiếm
                            </button>
                            <button type="reset" class="btn btn-default">
                                Mặc định
                            </button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input class="styled select-all-checkboxes" type="checkbox">
                                        <label></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Họ và tên</th>
                                <th>Ngày sinh</th>
                                <th>Ngày vào công ty</th>
                                <th>Số tháng làm việc</th>
                                <th>Cấp bậc</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employees as $employee) : extract($employee) ?>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input class="styled" name="selected[]" value="1" type="checkbox">
                                            <label></label>
                                        </div>
                                    </td>
                                    <td><?= $id ?></td>
                                    <td><?= $name ?></td>
                                    <td><?= $birthdate ?></td>
                                    <td><?= $start_date ?></td>
                                    <td><?= $work_months ?></td>
                                    <td>
                                        <!-- Xem chi tiết -->
                                        <button class="btn bg-gradient-info btn-sm m-0 mx-1 px-4" data-bs-toggle="modal" data-bs-target="#employeesinfomodal">
                                            <i class="fa-solid fa-circle-info fs-6"></i>
                                        </button>
                                        <button class="btn bg-warning btn-sm m-0 mx-1 px-4" data-bs-toggle="modal" data-bs-target="#modal">
                                            <i class="fa-regular fa-pen-to-square fs-6"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm m-0 mx-1 px-4">
                                            <i class="fa-regular fa-trash-can fs-6"></i>
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