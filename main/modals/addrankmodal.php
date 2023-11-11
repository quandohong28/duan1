<div class="modal fade modal-lg" id="addrankmodal" tabindex="-1" role="dialog" aria-labelledby="addrankmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chi tiết</p>
            </div>
            <form role="form" action="?act=table&data=add_rank" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên cấp bậc</label>
                        <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control form-control-sm" placeholder="" aria-describedby="helpId"></textarea>
                        <small id="helpId" class="text-muted">Help text</small>
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