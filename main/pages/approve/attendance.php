<?php if (isset($alert)) : ?>
    <div class="alert alert-<?= $class ?> text-light" role="alert">
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
                                    <td><?= $value['employee_name'] ?></td>
                                    <td><?= $value['date'] ?></td>
                                    <td><?= $value['checkin_time'] ?></td>
                                    <td><?= $value['checkout_time'] ?></td>
                                    <td>
                                    <div class="badge status"><?= $value['status'] ?></div>
                                </td>
                                <td>
                                    <div class="badge approve"><?= $value['approve'] ?></div>
                                </td>
                                    <td class="col-2">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#approveAttendanceModal" data-bs-value='<?= json_encode($value) ?>'>Chi tiết</button>
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
<div class="modal fade" id="approveAttendanceModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Chi tiết</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?act=approve&data=attendance" method="post">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <p>Ngày: <span class="fw-bold"></span></p>
                            <p>Họ và tên: <span class="fw-bold"></span></p>
                            <p>Mã nhân viên: <span class="fw-bold"></span></p>
                            <p>Giờ vào làm: <span class="fw-bold me-5"></span>Giờ ra: <span class="fw-bold"></span></p>
                            <p>Trạng thái: <span class="fw-bold"></span></p>
                        </div>
                        <div class="mb-3">
                            <label for="reject_reason" class="form-label">Lý do huỷ duyệt</label>
                            <textarea class="form-control form-control-sm" name="reason_reject" id="" cols="30" rows="10"></textarea>
                        </div>
                        <input type="hidden" name="attendance_id">
                        <input type="hidden" name="approver" value="<?= $_SESSION['user']['id']?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="approve" class="btn btn-sm btn-success">Phê duyệt</button>
                    <button type="submit" name="reject" class="btn btn-sm btn-danger">Huỷ duyệt</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var approveAttendanceModal = document.getElementById('approveAttendanceModal');

    approveAttendanceModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let attendance = JSON.parse(button.getAttribute('data-bs-value'));

        const employeeName = approveAttendanceModal.querySelector('.modal-body .mb-3 p:nth-child(2) span');
        const employeeCode = approveAttendanceModal.querySelector('.modal-body .mb-3 p:nth-child(3) span');
        const date = approveAttendanceModal.querySelector('.modal-body .mb-3 p:nth-child(1) span');
        const checkinTime = approveAttendanceModal.querySelector('.modal-body .mb-3 p:nth-child(4) span:nth-child(1)');
        const checkoutTime = approveAttendanceModal.querySelector('.modal-body .mb-3 p:nth-child(4) span:nth-child(2)');
        const status = approveAttendanceModal.querySelector('.modal-body .mb-3 p:nth-child(5) span');
        const attendanceId = approveAttendanceModal.querySelector('.modal-body input[name="attendance_id"]');

        employeeName.textContent = attendance.name;
        employeeCode.textContent = attendance.id;
        date.textContent = attendance.date;
        checkinTime.textContent = attendance.checkin_time;
        checkoutTime.textContent = attendance.checkout_time;
        status.textContent = attendance.status;
        attendanceId.value = attendance.id;

    });

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