<div class="row mb-4 p-3 justify-content-between bg-white">
    <a href="#" class="col-sm-12 col-lg-4 rounded-1 text-start">
        <div class="p-3 text-center">
            <!-- <img class="rounded-circle" src="<?= $image_path . $member['avatar'] ?>"> -->
            <img width="200px" height="200px" class="rounded-circle" src="https://picsum.photos/300/300">
        </div>
        <div class="text-center">
            <h6 class="badge bg-gradient-success">TEAM LEAD</h6>
            <h6 class="">ĐỖ HỒNG QUÂN</h6>
        </div>
    </a>
    <div class="col-sm-12 col-lg-8 text-white rounded-1 p-4">
        <div class="p-3">
            <h6 class="text-uppercase"><?= $team['name'] ?></h6>
            <p class="text-muted"><?= $team['description'] ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="bg-white rounded p-3">
            <h6>Các thành viên trong team của tôi</h6>
            <div class="row justify-content-center align-items-center gx-2 gy-5">
                <?php foreach ($team_members as $member) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="#" class="card text-start">
                            <div class="p-3" style="width: 100%; height:300px">
                                <img class="card-img-top rounded-circle" src="<?= $image_path . $member['avatar'] ?>">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><?= $member['name'] ?></h6>
                                <small class="card-text"><?= $member['bio'] ?></small>
                            </div>
                            <span class="badge bg-gradient-dark"><?= $member['job_title']?></span>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?php include_once 'editprofilemodal.php' ?>