<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <ul class="nav nav-tabs mb-5">
            <li class="nav-item">
                <a class="nav-link active" href="?act=approve&data=attendance">Phê duyệt chấm công</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=approve&data=leave_request">Phê duyệt nghỉ phép</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=approve&data=personnel_mobilization">Phê duyệt điều động nhân sự</a>
            </li>
        </ul>

        <?php
        
        if (isset($_GET['data'])) {
            switch ($_GET['data']) {
                case 'approve':
                    include 'approve.php';
                    break;
                case 'attendance':
                    $attendances = getAllAttendance();
                    if (isset($_GET['approve'])) {
                        $approve = $_GET['approve'];
                        $attendance_id = $_GET['attendance_id'];
                        $attendance = getAttendanceById($attendance_id);
                        $date = $attendance['date'];
                        $workHours = calWorkHours($attendance['checkin_time'], $attendance['checkout_time']);
                        $workDays = 1;
                        if ($approve == 'Accept') {
                            $alert = [($message = 'Đã phê duyệt thành công!'), ($class = 'success')];
                        } else {
                            $alert = [($message = 'Đã từ chối phê duyệt!'), ($class = 'danger')];
                        }
                        approveAttendance($attendance_id, $approve);
                        echo "<script>setTimeout(() => {window.location.href = '?act=approve&data=attendance'}, 2000)</script>";
                    }
                    include 'attendance.php';
                    break;
                case 'leave_request':
                    $requests = getAllRequests();
                    include 'leave_request.php';
                    break;
                case 'personnel_mobilization':
                    include 'personnel_mobilization.php';
                    break;
                default:
                    include 'approve.php';
                    break;
            }
        } else {
            include 'approve.php';
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
