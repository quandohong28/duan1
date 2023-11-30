<?php if (isset($alert)) : ?>
    <div class="alert alert-<?= $class?> text-light" role="alert">
        <h6 class="alert-heading">Thông báo</h6>
        <p><?= $message ?></p>
    </div>
<?php endif ?>

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
                                <td class="fw-bold">Nhân viên</td>
                                <td class="fw-bold">Ngày</td>
                                <td class="fw-bold">Giờ vào</td>
                                <td class="fw-bold">Giờ ra</td>
                                <td class="fw-bold">Trạng thái</td>
                                <td class="fw-bold">Phê duyệt</td>
                                <td class="fw-bold col-2">Hành động</td>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td>
                                    <input class="select-all-checkboxes" type="checkbox">
                                </td>
                                <td class="fw-bold">Nhân viên</td>
                                <td class="fw-bold">Ngày</td>
                                <td class="fw-bold">Giờ vào</td>
                                <td class="fw-bold">Giờ ra</td>
                                <td class="fw-bold">Trạng thái</td>
                                <td class="fw-bold">Phê duyệt</td>
                                <td class="fw-bold col-2">Hành động</td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($attendances as $key => $value) : ?>
                                <tr>
                                    <td>
                                        <input class="" name="checkbox" value="" type="checkbox">
                                    </td>
                                    <td><?= $value['name'] ?></td>
                                    <td><?= $value['date'] ?></td>
                                    <td><?= $value['checkin_time'] ?></td>
                                    <td><?= $value['checkout_time'] ?></td>
                                    <td><?= $value['status'] ?></td>
                                    <td><?= $value['approve'] ?></td>
                                    <td class="text-end col-2">
                                        <a class="btn btn-sm btn-success" href="?act=approve&data=attendance&attendance_id=<?= $value['id'] ?>&approve=accept">Phê duyệt</a>
                                        <a class="btn btn-sm btn-danger" href="?act=approve&data=attendance&attendance_id=<?= $value['id'] ?>&approve=reject">Từ chối</a>
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