<div class="modal fade modal-xl" id="employeesinfomodal" tabindex="-1" role="dialog" aria-labelledby="employeesinfomodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chi tiết</p>
            </div>
            <form role="form">
                <div class="modal-body">
                    <div class="row gap-3 justify-content-center">

                    </div>
                    <div class="row gap-3 justify-content-center">
                        <div class="col-md-7 form-group table-responsive p-3 border rounded">
                            <table class="table table-hover mb-5">
                                <thead>
                                    <h6>Thông tin cơ bản</h6>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <th scope="col">Cấp bậc</th>
                                        <td scope="row" id="rank"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Phòng ban</th>
                                        <td scope="row" id="department"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Team</th>
                                        <td scope="row" id="team"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Chức danh công việc</th>
                                        <td scope="row" id="job_title"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <h6>Thông tin liên hệ</h6>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <th scope="col">Số điện thoại</th>
                                        <td scope="row" id="contact_phone"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Email</th>
                                        <td scope="row" id="contact_email"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Địa chỉ</th>
                                        <td scope="row" id="contact_location"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 form-group table-responsive p-3 border rounded">
                            <table class="table table-hover">
                                <thead>
                                    <h6>Thông tin đăng nhập</h6>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <th scope="col">Tài khoản</th>
                                        <td scope="row" id="login_username"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Trạng thái</th>
                                        <td scope="row" id="login_status">
                                            <span class="badge bg-info">Active</span>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Hành động</th>
                                        <td scope="row">
                                            <a class="btn btn-sm btn-success">
                                                <i class="fa fa-reply fs-6 me-2"></i>
                                                <span>Khôi phục</span>
                                            </a>
                                            <a class="btn btn-sm btn-danger">
                                                <i class="fa fa-user-lock fs-6 me-2"></i>
                                                <span>Khoá</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Thêm mới</th>
                                        <td class="d-flex flex-column gap-3 justify-content-center center">
                                            <input type="text" class="form-control form-control-sm" placeholder="Tên đăng nhập">
                                            <input type="text" class="form-control form-control-sm" placeholder="Mật khẩu">
                                            <a class="btn btn-sm btn-success">
                                                <i class="fa fa-save fs-6 me-2"></i>
                                                <span>Lưu</span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row gap-3 justify-content-center">
                        <div class="col-md-4 form-group table-responsive p-3 border rounded">
                            <table class="table table-hover">
                                <thead>
                                    <h6>Lịch sử công việc</h6>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <th scope="col">Phòng ban</th>
                                        <td scope="row" id="history_department"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Chức danh công việc</th>
                                        <td scope="row" id="history_job_title"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Ngày bắt đầu</th>
                                        <td scope="row" id="history_start"></td>
                                    </tr>
                                    <tr class="">
                                        <th scope="col">Ngày kết thúc</th>
                                        <td scope="row" id="history_end"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-7 form-group table-responsive p-3 border rounded">
                            <h6>Giới thiệu</h6>
                            <p id="bio"></p>
                        </div>
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
    var modalId = document.getElementById('employeesinfomodal');

    modalId.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let recipient = JSON.parse(button.getAttribute('data-bs-data'));
        console.log(recipient);
        const rank = document.getElementById('rank');
        const department = document.getElementById('department');
        const team = document.getElementById('team');
        const job_title = document.getElementById('job_title');
        const contact_phone = document.getElementById('contact_phone');
        const contact_email = document.getElementById('contact_email');
        const contact_location = document.getElementById('contact_location');
        const login_username = document.getElementById('login_username');
        const login_status = document.getElementById('login_status');
        const history_department = document.getElementById('history_department');
        const history_job_title = document.getElementById('history_job_title');
        const history_start = document.getElementById('history_start');
        const history_end = document.getElementById('history_end');
        const bio = document.getElementById('bio');

        rank.innerHTML = recipient.rank_name;
        department.innerHTML = recipient.department_name;
        team.innerHTML = recipient.team_name;
        job_title.innerHTML = recipient.employee_jobtitle;
        contact_phone.innerHTML = recipient.contact_phone;
        contact_email.innerHTML = recipient.contact_email;
        contact_location.innerHTML = recipient.contact_location;
        login_username.innerHTML = recipient.login_username;
        // login_status.innerHTML = recipient.login_status;
        history_department.innerHTML = recipient.employee_history_department;
        history_job_title.innerHTML = recipient.employee_history_jobtitle;
        history_start.innerHTML = recipient.employee_history_startdate;
        history_end.innerHTML = recipient.employee_history_enddate;
        bio.innerHTML = recipient.employee_bio;
    });
</script>