<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <ul class="nav nav-tabs mb-5">
            <li class="nav-item">
                <a class="nav-link active" href="?act=approve&data=attendance">Phê duyệt chấm công</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=approve&data=leave_request">Phê duyệt nghỉ phép</a>
            </li>
        </ul>

        <?php

        if (isset($_GET['data'])) {
            switch ($_GET['data']) {
                case 'approve':
                    include('approve.php');
                    break;
                case 'attendance':
                    $attendance = getAllAttendance();
                    if (isset($_GET['employee_id']) && isset($_GET['approve'])) {
                        $employee_id = $_GET['employee_id'];
                        $approve = $_GET['approve'];
                        approveAttendance($employee_id, $approve);
                        $message = ($approve == 'accept') ? 'Đã phê duyệt thành công!' : 'Đã từ chối phê duyệt thành công!';
                    }
                    include('attendance.php');
                    break;
                case 'leave_request':
                    include('leave_request.php');
                    break;
                default:
                    include('approve.php');
                    break;
            }
        } else {
            include('approve.php');
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