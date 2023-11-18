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
                    <small class="col">THÁNG:<?= $salary['month'] ?> NĂM: <?= $salary['year'] ?></small>
                    <small class="col text-end">SỐ NGÀY LÀM VIỆC: <?= $salary['work_days'] ?></small>
                </p>
                <p class="row justify-content-between">
                    <small class="col"></small>
                    <small class="col text-end">SỐ GIỜ LÀM VIỆC: <?= $salary['work_hours'] ?></small>
                </p>
                <p class="row justify-content-between">
                    <small class="col"></small>
                    <small class="col text-end">OVERTIME: 0</small>
                </p>
            </div>
            <div class="row">
                <div class="table-responsive col-7">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>STT</th>
                                <th>Các khoản thu nhập</th>
                                <th>Hệ số</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>Lương cơ bản</th>
                                <td></td>
                                <td><?= number_format($salary_scale[0]['value'], 0, '.', ',') . ' đ' ?></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>Lương trên số ngày làm việc thực tế</th>
                                <td><?= number_format($salary['work_days'] / 26 * 100, 1) . ' %'?></td>
                                <td><?= number_format($real_salary) . ' đ' ?></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th>Nhà ở</th>
                                <td><?= $salary_scale[1]['value'] . ' %'?></td>
                                <td><?= number_format($salary_scale[1]['value'] * $real_salary / 100) . ' đ' ?></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <th>Xăng xe</th>
                                <td><?= $salary_scale[2]['value'] . ' %'?></td>
                                <td><?= number_format($salary_scale[2]['value'] * $real_salary / 100) . ' đ' ?></td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <th>Thưởng</th>
                                <td><?= $salary_scale[4]['value'] . ' %'?></td>
                                <td><?= number_format($salary_scale[4]['value'] * $real_salary / 100) . ' đ' ?></td>
                            </tr>
                            <tr>
                                <th>6</th>
                                <th>Thâm niên</th>
                                <td><?= $salary_scale[5]['value'] . ' %'?></td>
                                <td><?= number_format($salary_scale[5]['value'] * $real_salary / 100) . ' đ' ?></td>
                            </tr>

                            <tr>
                                <th></th>
                                <th>Tổng thu nhập</th>
                                <td></td>
                                <td><?= number_format($total_income) . ' đ' ?></td>
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
                                <td><?= number_format($salary_scale[3]['value'] * $real_salary / 100) . ' đ' ?></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>Khác</th>
                                <td>0đ</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Tổng trừ</th>
                                <td><?= number_format($salary_scale[3]['value'] * $real_salary / 100) . ' đ' ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-5">
                <p class="">
                    <small class="col fw-bold">TỔNG SỐ TIỀN LƯƠNG THỰC NHẬN: <?= number_format($total_income - $salary_scale[3]['value'] * $real_salary / 100) . ' đ' ?></small>
                </p>
                <p class="">
                    <small class="col fw-bold text-uppercase">BẰNG CHỮ: <?= numberToWords($total_income - $salary_scale[3]['value'] * $real_salary / 100) . ' ĐỒNG' ?></small>
                </p>
                <div class="row mb-5">
                    <div class="col text-center">
                        <p>Xác nhận của Công ty</p>
                        <p>QHR Master</p>
                        <img src="../assets/img/stamp.png" alt="" width="160px">
                    </div>
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