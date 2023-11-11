<div class="modal fade modal-lg" id="addemployeemodal" tabindex="-1" role="dialog" aria-labelledby="addemployeemodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chi tiết</p>
            </div>
            <form role="form">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var modalId = document.getElementById('addemployeemodal');

    modalId.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let recipient = JSON.parse(button.getAttribute('data-bs-data'));
        console.log(recipient);
        const contact_phone = document.getElementById('contact_phone');
        const contact_email = document.getElementById('contact_email');
        const contact_location = document.getElementById('contact_location');
        contact_phone.innerHTML = recipient[0].phone_number;
        contact_email.innerHTML = recipient[0].email;
        contact_location.innerHTML = recipient[0].location;

    });
</script>