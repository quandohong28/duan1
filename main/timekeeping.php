<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="mb-5">
            <div class="block-heading">
                <h3 class="text-info">Chấm công</h3>
                <p>Quét mã QR Code bên dưới</p>
                <p>Mã QR code sẽ được tự động tạo khi bạn đăng nhập vào hệ thống</p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img class="img-thumbnail mb-3" src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Sample_EPC_QR_code.png">
                    <p>Khả dụng: <span class="text-success fw-bold">00:32:14</span></p>
                </div>
                <div class="col-md-6 text-center">
                    <div class="getting-started-info">
                        <div class="mb-5">
                        </div>
                        <form class="mb-5 d-flex justify-content-center gap-5">
                            <label class="form-check px-5 py-4 bg-success shadow rounded position-relative check">
                                <input class="form-check-input" hidden type="radio" name="method_purchase" id="cash" value="0" checked>
                                <span class="badge bg-info text-wrap position-absolute top-0 start-50 translate-middle">Vào</span>
                                <i class="fa fa-fingerprint fs-1"></i>
                            </label>
                            <label class="form-check px-5 py-4 shadow rounded position-relative check">
                                <input class="form-check-input" hidden type="radio" name="method_purchase" id="credit" value="1">
                                <span class="badge bg-danger text-wrap position-absolute top-0 start-50 translate-middle">Ra</span>
                                <i class="fa fa-door-open fs-1"></i>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col bg-white shadow rounded mb-3 px-5 py-3">
            <h6 class="badge bg-info px-5 py-2 mb-3">Chấm công vào</h6>
            <div class="row justify-content-between gap-3">
                <span class="col bg-light p-3 rounded small">Ngày: 23/11/2023</span>
                <span class="col bg-light p-3 rounded small">Thời gian: 18:00:00</span>
                <span class="col bg-light p-3 rounded small">Trạng thái: <span class="badge bg-danger">Không hợp lệ</span></span>
                <span class="col bg-light p-3 rounded small">Tình trạng: <span class="badge bg-primary">Đã phê duyệt</span></span>
            </div>
        </div>

    </div>
</section>

<script>
    const check = document.querySelectorAll('.check');
    check.forEach((item) => {
        item.addEventListener('click', () => {
            check.forEach((item) => {
                item.classList.remove('bg-success');
                
            })
            item.classList.add('bg-success');
        })
    })
</script>