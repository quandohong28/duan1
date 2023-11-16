<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <?php if (isset($_GET['data'])) {
            switch ($_GET['data']) {
                case 'kpi':
                    include('kpi.php');
                    break;
                case 'attendance':
                    include('attendance.php');
                    break;
                case 'leave_request':
                    include('leave_request.php');
                    break;
                default:
                    include('benefit.php');
                    break;
            }
        } else {
            include('benefit.php');
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