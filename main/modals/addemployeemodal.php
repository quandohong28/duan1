<div class="modal fade modal-xl" id="addemployeemodal" tabindex="-1" role="dialog" aria-labelledby="addemployeemodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Thêm mới nhân viên</p>
            </div>
            <form role="form" action="?act=table&data=add_employee" method="post">
                <div class="modal-body">
                    <div class="mb-1">
                        <button type="reset" class="btn btn-sm btn-default"> Mặc định </button>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="employee_name" class="form-label">Họ và Tên</label>
                            <input type="text" name="employee_name" id="employee_name" class="form-control form-control-sm">
                            <small id="helpId" class="text-muted">Nhập chính xác Họ và Tên</small>
                        </div>
                        <div class="col-4">
                            <label for="employee_birthdate" class="form-label">Ngày sinh</label>
                            <input type="date" name="employee_birthdate" id="employee_birthdate" class="form-control form-control-sm">
                            <small id="helpId" class="text-muted">Nhập chính xác Ngày tháng năm sinh</small>
                        </div>
                        <div class="col-4">
                            <label for="start_date" class="form-label">Ngày bắt đầu làm việc</label>
                            <input type="date" name="start_date" id="start_date" class="form-control form-control-sm">
                            <small id="helpId" class="text-muted">Nhập chính xác Họ và Tên</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="department_id" class="form-label">Phòng ban</label>
                            <select name="department_id" id="department_id" class="form-control form-control-sm">
                                <option value="0">Chọn một Phòng ban</option>
                                <?php foreach ($departments as $department) : ?>
                                    <option value="<?= $department['id'] ?>"><?= $department['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <small id="helpId" class="text-muted">Phòng ban không được để trống</small>
                        </div>
                        <div class="col-4">
                            <label for="team_id" class="form-label">Team</label>
                            <select name="team_id" id="team_id" class="form-control form-control-sm">
                                <option value="0">Chọn một Team</option>
                                <?php foreach ($teams as $team) : ?>
                                    <option value="<?= $team['id'] ?>"><?= $team['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <small id="helpId" class="text-muted">Team không được để trống</small>
                        </div>
                        <div class="col-4">
                            <label for="job_title" class="form-label">Chức danh công việc</label>
                            <input type="text" name="job_title" id="job_title" class="form-control form-control-sm">
                            <small id="helpId" class="text-muted">Tiêu đề mô tả công việc</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="employee_bio" class="form-label">Giới thiệu</label>
                            <textarea name="employee_bio" id="employee_bio" cols="30" rows="6" class="form-control form-control-sm"></textarea>
                            <small id="helpId" class="text-muted">Giới thiệu về bản thân</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>