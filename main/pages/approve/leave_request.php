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
                                <td class="fw-bold">ID</td>
                                <td class="fw-bold">Ngày tạo</td>
                                <td class="fw-bold">Thời gian bắt đầu</td>
                                <td class="fw-bold">Thời gian kết thúc</td>
                                <td class="fw-bold">Trạng thái</td>
                                <td class="fw-bold">Thời gian phê duyệt</td>
                                <td class="fw-bold">Hành động</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($requests as $key => $value) :?>
                            <tr>
                                <td>
                                    <input class="select-row-checkboxes" type="checkbox">
                                </td>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['create_at'] ?></td>
                                <td><?= $value['start_date'] ?></td>
                                <td><?= $value['end_date'] ?></td>
                                <td><?= $value['status'] ?></td>
                                <td><?= $value['approve_at'] ?></td>
                                <td>
                                    <button class="btn btn-sm btn-success">Phê duyệt</button>
                                    <button class="btn btn-sm btn-danger">Huỷ duyệt</button>
                                </td>
                            </tr>
                            <?php endforeach?>
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
