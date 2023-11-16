<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="mb-5">
            <h6>Bảng lương chi tiết</h6>
            <a href="?act=salary" class="text-info"><i class="fa-solid fa-angles-left fa-fw"></i>Quay lại</a>
        </div>

        <div class="border py-3 px-5">
            <div class="row mb-4">
                <p class="fw-bold text-center">PHIẾU BÁO LƯƠNG</p>
                <p class="row justify-content-between">
                    <small class="col">CÔNG TY: QHR Master</small>
                    <small class="col text-end">HỌ VÀ TÊN: <?= $employee['employee_name'] ?></small>
                </p>
                <p class="row justify-content-between">
                    <small class="col">ĐỊA CHỈ: 230 Trịnh Văn Bô, Xuân Phương, Hà Nội</small>
                    <small class="col text-end">CÔNG CHUẨN: 26 Ngày</small>
                </p>
                <p class="row justify-content-between">
                    <small class="col">THÁNG:<?= '' ?> NĂM: <?= '' ?></small>
                    <small class="col text-end">SỐ NGÀY LÀM VIỆC: </small>
                </p>
                <p class="row justify-content-between">
                    <small class="col"></small>
                    <small class="col text-end">SỐ GIỜ LÀM VIỆC: </small>
                </p>
                <p class="row justify-content-between">
                    <small class="col"></small>
                    <small class="col text-end">OVERTIME: </small>
                </p>
            </div>
            <div class="row">
                <div class="table-responsive col">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>STT</th>
                                <th>Các khoản thu nhập</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>Nhà ở</th>
                                <td>10000000</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>Xăng xe</th>
                                <td>10000000</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th>Thâm niên</th>
                                <td>10000000</td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <th>Lương cơ bản</th>
                                <td>10000000</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Tổng thu nhập</th>
                                <td>10000000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive col">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>STT</th>
                                <th>Các khoản trừ vào lương</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>Bảo hiểm xã hội</th>
                                <td>10000000</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>Khác</th>
                                <td>0đ</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Tổng trừ</th>
                                <td>10000000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-5">
                <p class="">
                    <small class="col">TỔNG SỐ TIỀN LƯƠNG THỰC NHẬN: </small>
                </p>
                <p class="">
                    <small class="col">BẰNG CHỮ: </small>
                </p>
                <div class="row mb-5">
                    <div class="col text-center">Xác nhận của Công ty</div>
                    <div class="col text-center">Chữ ký nhân viên</div>
                </div>
            </div>
            <hr>
            <caption>
                <p><small>Hệ số lương được quy định bởi Công ty. Nếu có bất kỳ thắc mắc hãy liên hệ với Phòng ban liên quan để được giải đáp!</small></p>
                <p><small>Đơn vị tiền tệ: VND - Việt Nam Đồng</small></p>
                <p><small>Hệ số: % - Phần Trăm</small></p>
            </caption>
        </div>
    </div>
</section>