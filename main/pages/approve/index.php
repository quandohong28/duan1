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
                        // Kiểm tra một ngày chỉ được phê duyệt một lần
                        if (checkApproved($attendance['employee_id'], date('m', strtotime($date)), date('Y', strtotime($date)))) {
                            $alert = [($message = 'Đã phê duyệt rồi!'), ($class = 'danger')];
                        } else {
                            approveAttendance($attendance_id, $approve);
                        }
                        // Kiểm tra nếu hôm nay đã phê duyệt rồi thì tính lương, chưa thì không tính
                        if (checkApproved($attendance['employee_id'], date('m', strtotime($date)), date('Y', strtotime($date)))) {
                            $alert = [($message = 'Đã phê duyệt rồi!'), ($class = 'danger')];
                        } else {
                            addSalary($attendance['employee_id'], $workHours, $workDays, date('m', strtotime($date)), date('Y', strtotime($date)));
                        }
                        echo "<script>setTimeout(() => {window.location.href = '?act=approve&data=attendance'}, 2000)</script>";
                    }
                    include 'attendance.php';
                    break;
                case 'leave_request':
                    $requests = getAllRequests();
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $request_id = $_POST['request_id'];
                        if (isset($_POST['approve'])) {
                            $status = "Approved";
                            $alert = [($message = 'Đã phê duyệt thành công!'), ($class = 'success')];
                        } elseif (isset($_POST['reject'])) {
                            $status = "Rejected";
                            $alert = [($message = 'Đã từ chối phê duyệt!'), ($class = 'danger')];
                        } else {
                            $alert = [($message = 'Không hợp lệ!'), ($class = 'danger')];
                        }
                        approveRequest($request_id, $status);
                        echo "<script>setTimeout(() => {window.location.href = '?act=approve&data=leave_request'}, 2000)</script>";
                    }
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
