<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <ul class="nav nav-tabs mb-5">
            <li class="nav-item">
                <a class="nav-link active" href="?act=table&data=employee">Danh sách nhân sự</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=rank">Cấp bậc</a>
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
                case 'employee':
                    $employees = getAllEmployees();
                    $ranks = getAllRanks();
                    $departments = getAllDepartments();
                    $teams = getAllTeams();
                    include('employee.php');
                    break;
                case 'rank':
                    $ranks = getAllRanks();
                    include('rank.php');
                    break;
                case 'add_rank':
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $name = $_POST['name'];
                        $description = $_POST['description'];
                        addRank($name, $description);
                    }
                    echo '<meta http-equiv="refresh" content="0;url=?act=table&data=rank">';
                    break;
                case 'update_rank':
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $id = $_GET['rank'];
                        $name = $_POST['name'];
                        $description = $_POST['description'];
                        updateRank($id, $name, $description);
                    }
                    echo '<meta http-equiv="refresh" content="0;url=?act=table&data=rank">';
                    break;
                case 'delete_rank':
                    $id = $_GET['id'];
                    deleteRank($id);
                    echo '<meta http-equiv="refresh" content="0;url=?act=table&data=rank">';
                    break;
                case 'department':
                    $departments = getAllDepartments();
                    $teams = getAllTeams();
                    $employees = getAllEmployees();
                    include('department.php');
                    break;
                case 'team':
                    $teams = getAllTeams();
                    $departments = getAllDepartments();
                    $employees = getAllEmployees();
                    // var_dump($teams);
                    include('team.php');
                    break;
                default:
                    include('employee.php');
                    break;
            }
        } else {
            include('employee.php');
        }
        ?>
    </div>
</section>
<script>
    const selectAllCheckboxes = document.querySelector('.select-all-checkboxes');
    const checkboxes = document.querySelectorAll('input[name="checkbox"]');
    selectAllCheckboxes.addEventListener('change', function() {
        if (this.checked) {
            checkboxes.forEach(checkbox => {
                checkbox.checked = true;
            })
        } else {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            })
        }
    })
</script>