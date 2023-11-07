<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <ul class="nav nav-tabs mb-5">
            <li class="nav-item">
                <a class="nav-link active" href="?act=table&data=personnel">Danh sách nhân sự</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=position">Chức vụ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=department">Phòng ban</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=team">Teams</a>
            </li>
        </ul>

        <?php
        if (isset($_GET['data'])) {
            switch ($_GET['data']) {
                case 'personnel':
                    include('personnel.php');
                    break;
                case 'position':
                    include('position.php');
                    break;
                case 'department':
                    include('department.php');
                    break;
                case 'team':
                    include('team.php');
                    break;
                default:
                    include('personnel.php');
                    break;
            }
        } else {
            include('personnel.php');
        }
        ?>
    </div>
</section>