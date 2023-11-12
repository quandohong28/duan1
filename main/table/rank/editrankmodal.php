<div class="modal fade modal-lg" id="editrankmodal" tabindex="-1" role="dialog" aria-labelledby="editrankmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chi tiết</p>
            </div>
            <form role="form" method="post" class="form-edit-rank">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Tên cấp bậc</label>
                        <input type="text" name="rank_name" id="rank_name" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả</label>
                        <textarea type="text" name="rank_desc" id="rank_desc" cols="30" rows="10" class="form-control form-control-sm" placeholder="" aria-describedby="helpId"></textarea>
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

<script>
    var modalId = document.getElementById('editrankmodal');

    modalId.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let recipient = JSON.parse(button.getAttribute('data-bs-data'));
        console.log(recipient);
        const rankName = document.getElementById('rank_name');
        const rankDesc = document.getElementById('rank_desc');

        
        rankName.value = recipient.name;
        rankDesc.value = recipient.description;
        
        const form = document.querySelector('.form-edit-rank');
        form.action = '?act=table&data=edit_rank&id=' + recipient.id;
        // ?controller=table&table-value=rank&action=edit&id=1
    });
</script>