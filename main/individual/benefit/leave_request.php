<style>
    #editor {
        height: 600px;
    }
</style>

<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="mb-4">
            <h6>Nghỉ phép và nghỉ lễ</h6>
            <small>Tính năng đang phát triển</small>
        </div>

        <h6 class="mb-4">Danh sách Yêu cầu nghỉ phép đã gửi</h6>
        <div class="row mb-5 rounded shadow p-5">
            <div class="panel-body">
                <form role="form" class="filter-panel">
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Sắp xếp theo</label>
                            <select class="form-control">
                                <option value="0">Ngày tạo</option>
                                <option value="1">Ngày bắt đầu</option>
                                <option value="2">Ngày kết thúc</option>
                                <option value="3">Ngày duyệt</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Tuỳ chọn</label>
                            <select class="form-control">
                                <option value="0">Mới nhất - Cũ nhất</option>
                                <option value="0">Cũ nhất - Mới nhất</option>
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
                        <tfoot>
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
                        </tfoot>
                        <tbody>
                            <?php foreach ($leave_requests as $key => $value) :
                                $request = json_encode(getRequestById($value['id']));
                            ?>
                                <tr>
                                    <td>
                                        <input class="select-row-checkboxes" type="checkbox">
                                    </td>
                                    <td>
                                        <a href="?act=leave_request&request_id=<?= $value['id'] ?>"><?= $value['id'] ?></a>
                                    </td>
                                    <td><?= $value['create_at'] ?></td>
                                    <td><?= $value['start_date'] ?></td>
                                    <td><?= $value['end_date'] ?></td>
                                    <td>
                                        <div class="badge status"><?= $value['status'] ?></div>
                                    </td>
                                    <td><?= $value['approve_at'] ?></td>
                                    <td>
                                        <button data-bs-toggle="modal" data-bs-target="#requestDetailModal" data-bs-value="<?= $value['reason'] ?>" type="button" class="btn btn-sm btn-info">
                                            Chi tiết
                                        </button>
                                        <button data-bs-toggle="modal" data-bs-target="#editRequestModal" data-bs-value='<?= $request ?>' type="button" class="btn btn-sm btn-warning">Sửa</button>
                                        <a onclick="return confirm('Bạn có thực sự muốn hủy phiếu yêu cầu này?')" href="?act=leave_request&controller=cancel&request_id=<?= $value['id'] ?>" class="btn btn-sm btn-danger">Hủy phiếu</a>
                                    </td>
                                <?php
                            endforeach ?>
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
        </div>
        <div class="mb-4">
            <h6>Tạo yêu cầu nghỉ phép</h6>
            <form action="?act=leave_request" class="row mb-3 rounded shadow p-5 min-vh-100" method="post">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="time_start" class="form-label">Thời gian bắt đầu</label>
                        <input type="date" name="time_start" id="todayDate" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <label for="time_end" class="form-label">Thời gian kết thúc</label>
                        <input type="date" name="time_end" id="time_end" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-sm btn-success" type="submit">Gửi duyệt</button>
                        <input type="hidden" name="add_submit">
                    </div>
                </div>
                <div class="col">
                    <label for="" class="form-label">Lý do</label>
                    <textarea class="form-control form-control-sm" name="reason" id="" cols="" rows="30"></textarea>
                </div>
            </form>


        </div>
    </div>
</section>

<!-- Modal chi tiết một leave_request -->
<div class="modal fade modal-lg" id="requestDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Lý do</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <textarea class="reasonModal form-control form-control-sm" name="" id="" cols="30" rows="10" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sửa một leave_request -->
<div class="modal fade modal-lg" id="editRequestModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Lý do</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?act=leave_request" method="post">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="time_start" class="form-label">Ngày bắt đầu</label>
                                <input type="date" name="time_start" id="time_start_edit" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-md-6">
                                <label for="time_end" class="form-label">Ngày kết thúc</label>
                                <input type="date" name="time_end" id="time_end_edit" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="" class="form-label">Lý do</label>
                                <textarea class="form-control" name="reason" id="reason_edit" cols="" rows="10"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="edit_submit">
                        <input type="hidden" name="request_id" id="request_id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success btn-sm" data-bs-dismiss="modal">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Đặt giá trị placeholder cho trường input date
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('todayDate').setAttribute('value', today);

    // Hiển thị chi tiết một leave_request
    var requestDetailModal = document.getElementById('requestDetailModal');
    requestDetailModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let reason = button.getAttribute('data-bs-value');

        let modalBody = requestDetailModal.querySelector('.reasonModal');
        modalBody.textContent = reason;

    });

    // Sửa một leave_request
    var editRequestModal = document.getElementById('editRequestModal');
    editRequestModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-value attributes
        let request = button.getAttribute('data-bs-value');
        let requestData = JSON.parse(request);
        console.log(requestData);
        document.getElementById('time_start_edit').value = requestData.start_date;
        document.getElementById('time_end_edit').value = requestData.end_date;
        document.getElementById('reason_edit').value = requestData.reason;
        document.getElementById('request_id').value = requestData.id;
    });


    document.addEventListener('DOMContentLoaded', function() {
        const status = document.querySelectorAll('.status');
        status.forEach((item) => {
            if (item.innerHTML === 'Approved') {
                item.classList.add('bg-success');
            }
            else if(item.innerHTML === 'Cancelled') {
                item.classList.add('bg-light');
            }
            else if(item.innerHTML === 'Pending') {
                item.classList.add('bg-info');
            }
            else {
                item.classList.add('bg-danger');
            }
        })
    });
</script>