<div class="modal fade" id="editcontactinfomodal" tabindex="-1" role="dialog" aria-labelledby="editcontactinfomodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chỉnh sửa thông tin liên hệ</p>
            </div>
            <form role="form" action="" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="contact_phone_modal" class="form-label">Số điện thoại</label>
                            <input type="text" name="contact_phone_modal" id="contact_phone_modal" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="contact_email_modal" class="form-label">Email</label>
                            <input type="text" name="contact_email_modal" id="contact_email_modal" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="contact_location_modal" class="form-label">Địa chỉ</label>
                            <input type="text" name="contact_location_modal" id="contact_location_modal" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
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

<script>
    var editcontactinfomodal = document.getElementById('editcontactinfomodal');

    editcontactinfomodal.addEventListener('show.bs.modal', function(event) {
        console.log(contactData);

        const contact_phone_modal = document.getElementById('contact_phone_modal');
        const contact_email_modal = document.getElementById('contact_email_modal');
        const contact_location_modal = document.getElementById('contact_location_modal');
        
        console.log(contact_phone_modal);

        contact_phone_modal.value = contactData.contact_phone;
        contact_email_modal.value = contactData.contact_email;
        contact_location_modal.value = contactData.contact_location;
    });
</script>