<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="mb-5">
            <h6>Bảng hệ số lương</h6>
            <a href="?act=salary" class="text-info"><i class="fa-solid fa-angles-left fa-fw"></i>Quay lại</a>
        </div>

        <form role="form" class="filter-panel" action="" method="post">
            <div class="row">
                <div class="col-md-3 form-group">
                    <label>Tuỳ chọn xem</label>
                    <select class="form-control" name="rank_id">
                        <option value="1">Nhân viên</option>
                        <option value="2">Team Lead</option>
                        <option value="3">Quản lý Phòng ban</option>
                        <option value="4">Giám đốc</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 form-group">
                    <button type="submit" class="btn btn-sm btn-info">
                        Lọc
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
                <caption>
                    <p><small>Hệ số lương được quy định bởi Công ty. Nếu có bất kỳ thắc mắc hãy liên hệ với Phòng ban liên quan để được giải đáp!</small></p>
                    <p><small>Đơn vị tiền tệ: VND - Việt Nam Đồng</small></p>
                    <p><small>Hệ số: % - Phần Trăm</small></p>
                </caption>
                <thead>
                    <tr>
                        <td>
                            <input class="select-all-checkboxes" type="checkbox">
                        </td>
                        <td class="fw-bold">Tên</td>
                        <td class="fw-bold">Giá trị</td>
                        <td class="fw-bold">Mô tả</td>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td>
                            <input class="select-all-checkboxes" type="checkbox">
                        </td>
                        <td class="fw-bold">Tên</td>
                        <td class="fw-bold">Giá trị</td>
                        <td class="fw-bold">Mô tả</td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($salary_scale as $key => $value) : ?>
                        <tr>
                            <td>
                                <input class="checkboxes" type="checkbox">
                            </td>
                            <td><?= $value['name'] ?></td>
                            <td><?= (strlen($value['value']) > 3) ? number_format($value['value'], 0, '.', ',') . ' đ' : $value['value'] . ' %' ?></td>
                            <td><?= $value['description'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
</section>