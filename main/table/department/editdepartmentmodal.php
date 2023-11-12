<div class="modal fade modal-lg" id="editdepartmentmodal" tabindex="-1" role="dialog" aria-labelledby="editdepartmentmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chỉnh sửa Phòng ban</p>
            </div>
            <form role="form" action="?act=table&data=add_department" method="post">
                <div class="modal-body">
                    <div class="mb-3 row justify-content-between">
                        <div class="col-7">
                            <label for="department_name" class="form-label">Tên Phòng ban</label>
                            <input type="text" name="department_name" id="department_name" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Nhập tên Phòng ban</small>
                        </div>
                        <div class="col-5">
                            <label for="manager_id" class="form-label">Quản lý Phòng ban</label>
                            <input type="number" name="manager_id" id="manager_id" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Nhập ID của Quản lý Phòng ban</small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="department_desc" class="form-label">Mô tả</label>
                        <textarea type="text" name="department_desc" id="department_desc" cols="30" rows="10" class="form-control form-control-sm" placeholder="" aria-describedby="helpId"></textarea>
                        <small id="helpId" class="text-muted">Mô tả chi tiết công việc Phòng ban</small>
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