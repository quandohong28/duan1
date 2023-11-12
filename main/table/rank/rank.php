<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default no-border">
            <div class="panel-body">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addrankmodal">
                    <i class="fa fa-square-plus fs-6 me-2"></i>
                    <span>Thêm mới</span>
                </button>

                <form role="form" class="filter-panel">
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Tìm theo tên</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>ID</label>
                            <select class="form-control">
                                <option value="0">Tất cả</option>
                                <?php foreach ($ranks as $rank) : extract($rank) ?>
                                    <option value="<?= $id ?>"><?= $id ?></option>
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
                                <td class="fw-bold">Tên</td>
                                <td class="fw-bold">Mô tả</td>
                                <td class="fw-bold">Số lượng nhân sự</td>
                                <td class="fw-bold text-end">Hành động</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ranks as $rank) :
                                extract($rank);
                                $employee_number = getNumberOfEmployeesByRank($id);
                            ?>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input class="" name="checkbox" value="1" type="checkbox">
                                            <label></label>
                                        </div>
                                    </td>
                                    <td><?= $id ?></td>
                                    <td><?= $name ?></td>
                                    <td>
                                        <textarea class="form-control form-control-sm" name="" id="" cols="50" rows="3" readonly><?= $description ?></textarea>
                                    </td>
                                    <td><?= $employee_number['employee_number'] ?></td>
                                    <td class="text-end">
                                        <!-- Chức năng -->
                                        <button class="btn bg-gradient-warning btn-sm m-0 mx-1 px-4" data-bs-toggle="modal" data-bs-target="#editrankmodal" data-bs-data='<?= json_encode($rank) ?>'>
                                            <i class="fa fa-pen-to-square fs-6"></i>
                                            <span>Sửa</span>
                                        </button>
                                        <a href="?act=table&data=delete_rank&id=<?= $id ?>" class="btn bg-gradient-danger btn-sm m-0 mx-1 px-4" onclick="return confirm('Bạn có thực sự muốn xóa? Các dữ liệu liên quan sẽ biển mất! Hãy cẩn trọng!')">
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
<?php include 'addrankmodal.php' ?>
<?php include 'editrankmodal.php' ?>