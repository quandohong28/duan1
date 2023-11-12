<div class="modal fade" id="editemployeeinfomodal" tabindex="-1" role="dialog" aria-labelledby="editemployeeinfomodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chỉnh sửa thông tin công việc</p>
            </div>
            <form role="form" action="" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="rank_name" class="form-label">Cấp bậc</label>
                            <select class="form-select form-select-sm" name="rank_name">
                                <?php foreach ($ranks as $rank) : ?>
                                    <option value="<?= $rank['id'] ?>"><?= $rank['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <small id='rank_name'></small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="department_name" class="form-label">Phòng ban</label>
                            <select class="form-select form-select-sm" name="department_name">
                                <?php foreach ($departments as $department) : ?>
                                    <option value="<?= $department['id'] ?>"><?= $department['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <small id='department_name'></small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="team_name" class="form-label">Team</label>
                            <select class="form-select form-select-sm" name="team_name">
                                <?php foreach ($teams as $team) : ?>
                                    <option value="<?= $team['id'] ?>"><?= $team['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <small id='team_name'></small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="edit_job_title" class="form-label">Chức danh công việc</label>
                            <input type="text" name="edit_job_title" id="edit_job_title" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
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
    var editemployeeinfomodal = document.getElementById('editemployeeinfomodal');

    editemployeeinfomodal.addEventListener('show.bs.modal', function(event) {
        console.log(contactData);

        const rank_name = document.querySelector('#rank_name');
        const department_name = document.querySelector('#department_name');
        const team_name = document.querySelector('#team_name');
        const edit_job_title = document.querySelector('#edit_job_title');

        rank_name.innerHTML = 'Cấp bậc hiện tại: ' + contactData.rank_name;
        department_name.innerHTML = 'Phòng ban hiện tại: ' + contactData.department_name;
        team_name.innerHTML = 'Team hiện tại: ' + contactData.team_name;
        edit_job_title.value = contactData.employee_jobtitle;
    });
</script>