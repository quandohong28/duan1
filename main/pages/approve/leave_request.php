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
                            <button type="reset" class="btn btn-sm btn-default me-3">
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
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-sm btn-success me-3">Phê duyệt đã chọn</button>
                            <button class="btn btn-sm btn-danger me-3">Huỷ duyệt đã chọn</button>
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
                            <?php foreach ($requests as $key => $value) : ?>
                                <tr>
                                    <td>
                                        <input class="select-row-checkboxes" type="checkbox">
                                    </td>
                                    <td><?= $value['id'] ?></td>
                                    <td><?= $value['create_at'] ?></td>
                                    <td><?= $value['start_date'] ?></td>
                                    <td><?= $value['end_date'] ?></td>
                                    <td>
                                        <div class="badge status"><?= $value['status'] ?></div>
                                    </td>
                                    <td><?= $value['approve_at'] ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#approveLeaveRequestModal" data-bs-value='<?= json_encode($value) ?>'>Chi tiết</button>
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

<!-- Modal -->
<div class="modal fade" id="approveLeaveRequestModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Chi tiết</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?act=approve&data=leave_request" method="post">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <p>Nhân viên nghỉ phép: <span class="fw-bold">Nguyễn Văn A</span></p>
                            <p>Mã nhân viên: <span class="fw-bold">NV001</span></p>
                            <p>Số ngày nghỉ: <span class="fw-bold">03</span></p>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Lý do</label>
                            <textarea class="form-control form-control-sm" name="" id="" cols="30" rows="10" readonly></textarea>
                        </div>
                        <input type="hidden" name="request_id">
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
    var approveLeaveRequestModal = document.getElementById('approveLeaveRequestModal');

    approveLeaveRequestModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let requestId = JSON.parse(button.getAttribute('data-bs-value'));

        console.log(requestId);
        const employeeName = document.querySelector('#approveLeaveRequestModal .modal-body .mb-3 p:nth-child(1) span');
        const employeeId = document.querySelector('#approveLeaveRequestModal .modal-body .mb-3 p:nth-child(2) span');
        const leaveDays = document.querySelector('#approveLeaveRequestModal .modal-body .mb-3 p:nth-child(3) span');
        const reason = document.querySelector('#approveLeaveRequestModal .modal-body .mb-3 textarea');
        const requestIdInput = document.querySelector('#approveLeaveRequestModal .modal-body input[name="request_id"]');
        employeeName.innerHTML = requestId.employee_name;
        employeeId.innerHTML = requestId.employee_id;
        // Tính số ngày nghỉ bằng end_date - start_date
        const start_date = new Date(requestId.start_date);
        const end_date = new Date(requestId.end_date);
        const leave_days = (end_date - start_date) / (1000 * 3600 * 24) + 1;
        leaveDays.innerHTML = leave_days;
        reason.innerHTML = requestId.reason;
        requestIdInput.value = requestId.id;


        // Use above variables to manipulate the DOM
    });

    document.addEventListener('DOMContentLoaded', function() {
        const status = document.querySelectorAll('.status');
        status.forEach((item) => {
            if (item.innerHTML === 'Approved') {
                item.classList.add('bg-success');
            }
            else if(item.innerHTML === 'Pending') {
                item.classList.add('bg-info');
            } else {
                item.classList.add('bg-danger');
            }
        })
    });
</script>