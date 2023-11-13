<div class="row mb-4">
    <div class="col-6 card text-white bg-gradient-light">
        <img class="card-img-top" src="<?= $image_path . $team['image'] ?>" >
        <div class="card-body">
            <h6><?= $team['name'] ?></h6>
            <p class="text-muted"><?= $team['description'] ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="bg-white rounded p-3">
            <h6 class="mb-4">Thành viên trong Team</h6>
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
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?php include_once 'editprofilemodal.php' ?>