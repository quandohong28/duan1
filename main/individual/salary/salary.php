<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="mb-5">
            <h6>Lương</h6>
            <small>Tính năng đang phát triển</small>
        </div>
        <div class="row justify-content-between ps-3 mb-5">
            <div class="col-md-6 p-3 rounded mb-5 row shadow">
                <div class="col row">
                    <div class="col-sm-4 col-lg-3 fs-2 me-3 text-info text-gradient">
                        <i class="fa-solid fa-money-bill-trend-up"></i>
                    </div>
                    <div class="col">
                        <h6>Bảng hệ số lương</h6>
                    </div>
                </div>
                <div class="col text-end">
                    <a href="?act=salary_scale" class="btn btn-sm btn-outline-dark">Chi tiết</a>
                </div>
            </div>
        </div>

        <form role="form" class="filter-panel">
            <div class="row">
                <div class="col-md-3 form-group">
                    <label>Sắp xếp theo</label>
                    <select class="form-control">
                        <option value="0">Gần đây nhất</option>
                        <option value="1">Xa nhất</option>
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
                        <td class="fw-bold">Tháng</td>
                        <td class="fw-bold">Năm</td>
                        <td class="fw-bold">Số ngày làm việc</td>
                        <td class="fw-bold">Số giờ làm việc</td>
                        <td class="fw-bold text-end">Hành động</td>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td>
                            <input class="select-all-checkboxes" type="checkbox">
                        </td>
                        <td class="fw-bold">ID</td>
                        <td class="fw-bold">Tháng</td>
                        <td class="fw-bold">Năm</td>
                        <td class="fw-bold">Số ngày làm việc</td>
                        <td class="fw-bold">Số giờ làm việc</td>
                        <td class="fw-bold text-end">Hành động</td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($salaries as $key => $value) : ?>
                        <tr>
                            <td>
                                <input class="checkboxes" type="checkbox">
                            </td>
                            <td><?= $value['id'] ?></td>
                            <td><?= $value['month'] ?></td>
                            <td><?= $value['year'] ?></td>
                            <td><?= $value['work_days'] . ' ngày' ?></td>
                            <td><?= $value['work_hours']  . ' giờ' ?></td>
                            <td class="text-end">
                                <!-- Chức năng - xem chi tiết -->
                                <a href="?act=salary_detail&id=<?= $value['id']?>" class="btn bg-gradient-info btn-sm m-0 mx-1 px-4">
                                    <i class="fa-solid fa-circle-info fs-6"></i>
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
</section>