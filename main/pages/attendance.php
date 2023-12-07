<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="">
            <div class="block-heading mb-3">
                <h6>Chấm công</h6>
            </div>
            <form action="" method="post" class="mb-5">
                <div class="row align-items-end justify-content-center mb-5 gap-5">
                    <div class="col-md-5 text-center">
                        <?php include 'components/clock.html' ?>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="mb-5 d-flex justify-content-center gap-5">
                                <label class="form-check px-5 py-4 bg-gradient-info shadow rounded position-relative check zoom-button text-light active">
                                    <input class="form-check-input" hidden type="radio" name="method" id="checkin" value="0" checked>
                                    <span class="badge bg-info text-wrap position-absolute top-0 start-50 translate-middle">Vào</span>
                                    <i class="fa fa-fingerprint fs-1"></i>
                                </label>
                                <label class="form-check px-5 py-4 shadow rounded position-relative check">
                                    <input class="form-check-input" hidden type="radio" name="method" id="checkout" value="1">
                                    <span class="badge bg-danger text-wrap position-absolute top-0 start-50 translate-middle">Ra</span>
                                    <i class="fa fa-door-open fs-1"></i>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-success p-3 fw-bold fs-6" type="submit" name="submit">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2">
                    <?php if (isset($message)) : ?>
                        <div class="alert alert-light" role="alert">
                            <h6 class="alert-heading">Thông báo</h6>
                            <p><?= $message ?></p>
                        </div>
                    <?php endif ?>
                </div>
            </form>
            <h6>Danh sách</h6>
            <div class="col bg-white shadow rounded mb-3 px-5 py-3">
                <form role="form" class="filter-panel">
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Sắp xếp theo</label>
                            <select class="form-control form-control-sm">
                                <option value="0">Gần đây nhất</option>
                                <option value="1">Xa nhất</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Trạng thái</label>
                            <select class="form-control form-control-sm">
                                <option value="0">Tất cả</option>
                                <option value="1">Muộn</option>
                                <option value="0">Đúng giờ</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Phê duyệt</label>
                            <select class="form-control form-control-sm">
                                <option value="0">Tất cả</option>
                                <option value="1">Đang chờ duyệt</option>
                                <option value="2">Đã duyệt</option>
                                <option value="3">Từ chối</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 form-group">
                            <button type="submit" class="btn btn-sm btn-info me-3">
                                <i class="fa fa-search fs-6 fa-fw"></i>
                                <span>Tìm kiếm</span>
                            </button>
                            <button type="reset" class="btn btn-sm btn-default">
                                Mặc định
                            </button>
                        </div>
                        <div class="col-md-2 form-group text-end">
                            <button type="submit" class="btn btn-sm btn-success me-3">
                                <i class="fa-regular fa-file-excel fs-6 fa-fw"></i>
                                <span>Xuất</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col bg-white shadow rounded mb-3 px-5 py-3 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>
                                <input class="select-all-checkboxes" type="checkbox">
                            </td>
                            <td class="fw-bold">Ngày</td>
                            <td class="fw-bold">Giờ vào</td>
                            <td class="fw-bold">Giờ ra</td>
                            <td class="fw-bold">Trạng thái</td>
                            <td class="fw-bold">Phê duyệt</td>
                            <td class="fw-bold">Thời gian duyệt</td>
                            <td class="fw-bold">Người duyệt</td>
                            <td class="fw-bold">Lý do từ chối</td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>
                                <input class="select-all-checkboxes" type="checkbox">
                            </td>
                            <td class="fw-bold">Ngày</td>
                            <td class="fw-bold">Giờ vào</td>
                            <td class="fw-bold">Giờ ra</td>
                            <td class="fw-bold">Trạng thái</td>
                            <td class="fw-bold">Phê duyệt</td>
                            <td class="fw-bold">Thời gian duyệt</td>
                            <td class="fw-bold">Người duyệt</td>
                            <td class="fw-bold">Lý do từ chối</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($attendance as $key => $value) : ?>
                            <tr>
                                <td>
                                    <input class="" name="checkbox" value="" type="checkbox">
                                </td>
                                <td><?= $value['date'] ?></td>
                                <td><?= $value['checkin_time'] ?></td>
                                <td><?= $value['checkout_time'] ?></td>
                                <td>
                                    <div class="badge status"><?= $value['status'] ?></div>
                                </td>
                                <td>
                                    <div class="badge approve"><?= $value['approve'] ?></div>
                                </td>
                                <td><?= $value['approve_at'] ?></td>
                                <td><?= $value['approver'] ?></td>
                                <td><?= $value['reason_reject'] ?></td>
                                <td></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<script>
    const check = document.querySelectorAll('.check');
    check.forEach((item) => {
        item.addEventListener('click', () => {
            check.forEach((item) => {
                item.classList.remove('bg-gradient-info');
                item.classList.remove('zoom-button');
                item.classList.remove('active');
                item.classList.remove('text-light');
            })
            item.classList.add('bg-gradient-info');
            item.classList.add('zoom-button');
            item.classList.add('active');
            item.classList.add('text-light');
        })
    })

    document.addEventListener('DOMContentLoaded', function() {
        const status = document.querySelectorAll('.status');
        const approve = document.querySelectorAll('.approve');
        status.forEach((item) => {
            if (item.innerHTML !== 'Late') {
                item.classList.add('bg-success');
            } else {
                item.classList.add('bg-danger');
            }
        })

        approve.forEach((item) => {
            if (item.innerHTML == 'Rejected') {
                item.classList.add('bg-danger');
            }else if(item.innerHTML == 'Accepted') {
                item.classList.add('bg-success');
            }
        })
    });
</script>