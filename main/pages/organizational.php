<div class="col-lg-12 col-md-12">
    <div class="card ps-5">
        <h6 class="mt-3">Sơ đồ tổ chức</h6>
        <div class="card-body p-5">
            <div class="timeline timeline-one-side">
                <?php foreach ($departments as $department) :
                    $teams = getTeamByDepartmentId($department['id']);
                ?>
                    <div class="timeline-block my-3 py-3" data-bs-toggle="collapse" data-bs-target="#team<?= $department['id'] ?>">
                        <span class="timeline-step">
                            <img src="../assets/img/user.jpg" alt="" class="rounded-circle" height="80" width="80">
                        </span>
                        <div class="timeline-content px-5 py-4">
                            <p class="text-light small fw-bold badge bg-success"><?= $department['name'] ?></p>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= $department['description'] ?></p>
                        </div>
                        <div id="team<?= $department['id'] ?>" class="collapse">
                            <div class="px-5 py-3 ms-5">
                                <div class="timeline timeline-one-side">
                                    <?php foreach ($teams as $team) :
                                        $employees = getEmployeeByTeamId($team['id']);
                                    ?>
                                        <div class="timeline-block my-3 py-3" data-bs-toggle="collapse" data-bs-target="#employee<?= $team['id'] ?>">
                                            <span class="timeline-step">
                                                <img src="../assets/img/user.jpg" alt="" class="rounded-circle" height="80" width="80">
                                            </span>
                                            <div class="timeline-content px-5 py-4">
                                                <p class="text-light small fw-bold badge bg-info"><?= $team['name'] ?></p>
                                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= $team['description'] ?></p>
                                            </div>
                                            <div id="employee<?= $team['id'] ?>" class="collapse bg-gradient-light rounded ms-5">
                                                <div class="row">
                                                    <div class="px-5 py-3 ms-5 d-flex align-items-center gap-1">
                                                        <span class="me-3 text-light badge bg-dark">Team Lead</span>
                                                        <div>
                                                            <img width="30" class="rounded-circle" src="https://picsum.photos/30/30" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="px-5 py-3 ms-5 d-flex align-items-center gap-1">
                                                        <span class="me-3 text-dark shadow badge bg-light">Thành viên</span>
                                                        <?php foreach ($employees as $employee) : ?>
                                                            <div>
                                                                <img width="30" class="rounded-circle" src="https://picsum.photos/30/30" alt="">
                                                            </div>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>