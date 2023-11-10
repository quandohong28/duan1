<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <ul class="nav nav-tabs mb-5">
            <li class="nav-item">
                <a class="nav-link active" href="?act=table&data=personnel">Danh sách nhân sự</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=rank">Chức vụ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=department">Phòng ban</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=team">Teams</a>
            </li>
        </ul>

        <?php
        include '../model/pdo.php';
        include '../model/employee.php';
        include '../model/rank.php';
        include '../model/department.php';
        include '../model/team.php';

        if (isset($_GET['data'])) {
            switch ($_GET['data']) {
                case 'personnel':
                    $employees = getAllEmployees();
                    $ranks = getAllRanks();
                    $departments = getAllDepartments();
                    $teams = getAllTeams();
                    include('personnel.php');
                    break;
                case 'rank':
                    $ranks = getAllRanks();
                    include('rank.php');
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