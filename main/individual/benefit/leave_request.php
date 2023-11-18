<style>
    #editor {
        height: 600px;
    }
</style>

<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="mb-4">
            <h6>Nghỉ phép và nghỉ lễ</h6>
            <small>Tính năng đang phát triển</small>
        </div>
        <div class="mb-4">
            <form action="" class="row mb-3 rounded shadow p-5 min-vh-100" method="post">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="" class="form-label">Thời gian bắt đầu</label>
                        <input type="date" name="" id="todayDate" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Thời gian kết thúc</label>
                        <input type="date" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-sm btn-success" type="submit">Gửi duyệt</button>
                    </div>
                </div>
                <div class="col max-vh-50">
                    <label for="" class="form-label">Nội dung đơn nghỉ phép</label>
                    <div id="editor">
                        <input type="hidden" id="quillContent" name="quillContent">
                    </div>
                </div>
            </form>

            <h6 class="mb-4">Danh sách Yêu cầu nghỉ phép đã gửi</h6>
            <div class="row mb-3 rounded shadow p-5">
                <div class="panel-body">
                    <form role="form" class="filter-panel">
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label>Sắp xếp theo</label>
                                <select class="form-control">
                                    <option value="0">Ngày tạo</option>
                                    <option value="1">Ngày bắt đầu</option>
                                    <option value="2">Ngày kết thúc</option>
                                    <option value="3">Ngày duyệt</option>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Tuỳ chọn</label>
                                <select class="form-control">
                                    <option value="0">Mới nhất - Cũ nhất</option>
                                    <option value="0">Cũ nhất - Mới nhất</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 form-group">
                                <button type="submit" class="btn btn-sm btn-info me-3">
                                    <i class="fa fa-search fs-6 me-2"></i>
                                    <span>Tìm kiếm</span>
                                </button>
                                <button type="reset" class="btn btn-sm btn-default">
                                    Mặc định
                                </button>
                            </div>
                            <div class="col-md-2 form-group text-end">
                                <button type="submit" class="btn btn-sm btn-success me-3">
                                    <i class="fa-regular fa-file-excel fs-6 me-2"></i>
                                    <span>Xuất</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>
                                        <input class="select-all-checkboxes" type="checkbox">
                                    </td>
                                    <td class="fw-bold">ID</td>
                                    <td class="fw-bold">Ngày tạo</td>
                                    <td class="fw-bold">Thời gian bắt đầu</td>
                                    <td class="fw-bold">Thời gian kết thúc</td>
                                    <td class="fw-bold">Trạng thái</td>
                                    <td class="fw-bold">Thời gian phê duyệt</td>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td>
                                        <input class="select-all-checkboxes" type="checkbox">
                                    </td>
                                    <td class="fw-bold">ID</td>
                                    <td class="fw-bold">Ngày tạo</td>
                                    <td class="fw-bold">Thời gian bắt đầu</td>
                                    <td class="fw-bold">Thời gian kết thúc</td>
                                    <td class="fw-bold">Trạng thái</td>
                                    <td class="fw-bold">Thời gian phê duyệt</td>
                                </tr>
                            </tfoot>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                    <ul class="pagination pagination-sm no-border">
                        <li class="page-item">
                            <a class="page-link" href="#">«</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">»</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Khởi tạo Quill Editor
    var quill = new Quill('#editor', {
        theme: 'snow' // Bạn có thể thay đổi theme tại đây
    });


    const today = new Date().toISOString().split('T')[0];

    // Đặt giá trị placeholder cho trường input date
    document.getElementById('todayDate').setAttribute('value', today);

    // Lấy nội dung dưới dạng HTML
    quill.on('text-change', function(delta, oldDelta, source) {
        if (source === 'user') {
            // Đây là sự kiện được kích hoạt bởi người dùng nhập nội dung
            var content = quill.root.innerHTML;
            console.log(content);
        }
    });
</script>