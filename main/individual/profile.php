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
                <a href="#" class="btn btn-sm btn-warning text-dark" data-bs-toggle="modal" data-bs-target="#editmyinfo">Chỉnh sửa</a>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="bg-white rounded p-3">
            <div class="bg-white rounded p-3">
                <h6>Team của tôi</h6>
                <div class="row justify-content-center align-items-center gx-2 gy-5">
                    <?php foreach ($team_members as $member) : ?>
                        <div class="col-md-4 col-sm-6">
                            <a href="#" class="card text-start">
                                <div class="p-3" style="width: 100%;">
                                    <img class="card-img-top rounded-circle" src="<?= $image_path . $member['avatar'] ?>">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title"><?= $member['name'] ?></h6>
                                    <small class="card-text"><?= $member['bio'] ?></small>
                                </div>
                                <span class="badge bg-gradient-dark"><?= $member['job_title'] ?></span>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'editprofilemodal.php' ?>