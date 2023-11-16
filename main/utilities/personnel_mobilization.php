<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <div class="mb-4">
            <h6>Điều đông nhân sự</h6>
            <small>Tính năng đang phát triển</small>
        </div>
        <div class="row gap-3 justify-content-start mb-4">
            <a href="#" class="col-xl-3 col-sm-6 mb-xl-0 mb-4 shadow rounded p-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8">
                        <h6 class="font-weight-bolder mb-0">Điều động nhân sự</h6>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                            <i class="fa fa-shuffle"></i>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="col-xl-3 col-sm-6 mb-xl-0 mb-4 shadow rounded p-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8">
                        <h6 class="font-weight-bolder mb-0">Bổ nhiệm</h6>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                            <i class="fa fa-medal"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="mb-4">
            <h6>Lịch sử Điều động nhân sự</h6>
            <small>Tính năng đang phát triển</small>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default no-border">
                    <div class="panel-body">

                        <form role="form" class="filter-panel">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Cấp bậc</label>
                                    <select class="form-control">
                                        <option value="0">Tất cả</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Phòng Ban</label>
                                    <select class="form-control">
                                        <option value="0">Tất cả</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Team</label>
                                    <select class="form-control">
                                        <option value="0">Tất cả</option>
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
                                        <td class="fw-bold">Ngày Bổ nhiệm / Điều động</td>
                                        <td class="fw-bold">Họ và tên</td>
                                        <td class="fw-bold">Chức vụ trước khi Bổ nhiệm / Điều động</td>
                                        <td class="fw-bold">Chức vụ sau khi Bổ nhiệm / Điều động</td>
                                        <td class="fw-bold">Chi tiết</td>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>
                                            <input class="select-all-checkboxes" type="checkbox">
                                        </td>
                                        <td class="fw-bold">ID</td>
                                        <td class="fw-bold">Ngày Bổ nhiệm / Điều động</td>
                                        <td class="fw-bold">Họ và tên</td>
                                        <td class="fw-bold">Chức vụ trước khi Bổ nhiệm / Điều động</td>
                                        <td class="fw-bold">Chức vụ sau khi Bổ nhiệm / Điều động</td>
                                        <td class="fw-bold">Chi tiết</td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class="" name="checkbox" value="<?= $id ?>" type="checkbox">
                                        </td>
                                        <td>1</td>
                                        <td>23/11/2023</td>
                                        <td>Đỗ Hồng Quân</td>
                                        <td>Team Lead</td>
                                        <td>Giám đốc</td>
                                        <!-- Xem chi tiết -->
                                        <td>
                                            <button class="btn bg-gradient-info btn-sm m-0 mx-1 px-4" data-bs-toggle="modal" data-bs-target="#" data-bs-data=''>
                                                <i class="fa-solid fa-circle-info fs-6"></i>
                                            </button>
                                        </td>
                                    </tr>
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
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</section>