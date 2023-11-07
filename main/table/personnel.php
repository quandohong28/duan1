<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default no-border">
            <div class="panel-body">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal">
                    Thêm mới
                </button>

                <form role="form" class="filter-panel">
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Country</label>
                            <select class="form-control">
                                <option value="">Cái gì đấy</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Created At</label>
                            <div class="input-group date" id="datetimepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">
                                    <i class="ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group text-right">
                            <button type="submit" class="btn btn-info">
                                <span class="glyphicon glyphicon-search"></span>
                                Tìm kiếm
                            </button>
                            <button type="reset" class="btn btn-default">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 40px">
                                    <div class="checkbox">
                                        <input class="styled select-all-checkboxes" type="checkbox">
                                        <label></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Country</th>
                                <th>Created At</th>
                                <th style="width: 135px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input class="styled" name="selected[]" value="1" type="checkbox">
                                        <label></label>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>Mark Otto</td>
                                <td>mark_otto@example.com</td>
                                <td>United States</td>
                                <td>01/02/2019 2:45 PM</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" data-bs-target="#modal">
                                        <i class="fa-regular fa-pen-to-square fs-6"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa-regular fa-trash-can fs-6"></i>
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
                    <li class="page-item active">
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


<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chỉnh sửa</p>
            </div>
            <form role="form">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Name</label>
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email address</label>
                            <input type="email" placeholder="Enter email" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Repeat Password</label>
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Information</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="checkbox">
                                <label for="checkbox">
                                    Approve
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>