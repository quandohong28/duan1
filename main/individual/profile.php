<div class="row">
    <div class="col-12">
        <div class="p-3 mb-4 bg-white d-lfex flex-column rounded">
            <div class="mb-3">
                <img class="rounded" src="<?= $avatar_path . $employee['employee_avatar'] ?>" width="160">
            </div>
            <div>
                <h6><?= $employee['employee_name'] ?></h6>
                <p class="text-muted"><?= $employee['employee_bio'] ?></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <div class="bg-white rounded p-3">
            <h6 class="panel-heading no-border">
                Thông tin cá nhân
            </h6>
            <div class="panel-body">
                <table class="table no-first-border">
                    <tbody>
                        <tr>
                            <td class="text-muted">Cấp bậc:</td>
                            <td><?= $employee['rank_name'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Phòng ban:</td>
                            <td><?= $employee['department_name'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Team:</td>
                            <td><?= $employee['team_name'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Chức danh công việc:</td>
                            <td><?= $employee['employee_jobtitle'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Ngày sinh:</td>
                            <td><?= $employee['employee_birthdate'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Số điện thoại:</td>
                            <td><?= $employee['contact_phone'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Email:</td>
                            <td><?= $employee['contact_email'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Quê quán:</td>
                            <td><?= $employee['contact_location'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-block btn-primary" data-bs-toggle="modal" data-bs-target="#editmyinfo">Chỉnh sửa</a>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="bg-white rounded p-3">
            chèn nội dung gì đó ở đây, chưa nghĩ ra
        </div>
    </div>
</div>

<?php include_once 'editprofilemodal.php' ?>