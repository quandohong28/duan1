<div class="modal fade" id="editmyinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin cá nhân</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <table class="table no-first-border">
                        <tbody>
                            <tr class="form-group">
                                <td>
                                    <label for="position">Họ và Tên:</label>
                                </td>
                                <td><input class="form-control" name="position" id="position" value=""></td>
                            </tr>
                            <tr class="form-group">
                                <td>
                                    <label for="department">Bio:</label>
                                </td>
                                <td>
                                    <textarea class="form-control form-control-sm" name="department" id="department" cols="30" rows="4"></textarea>
                                </td>
                            </tr>
                            <tr class="form-group">
                                <td>
                                    <label for="birthday">Ngày sinh:</label>
                                </td>
                                <td><input class="form-control" name="birthday" id="birthday" value=""></td>
                            </tr>
                            <tr class="form-group">
                                <td>
                                    <label for="tel">Số điện thoại:</label>
                                </td>
                                <td><input class="form-control" name="tel" id="tel" value=""></td>
                            </tr>
                            <tr class="form-group">
                                <td>
                                    <label for="email">Email:</label>
                                </td>
                                <td><input class="form-control" name="email" id="email" value=""></td>
                            </tr>
                            <tr class="form-group">
                                <td>
                                    <label for="location">Địa chỉ:</label>
                                </td>
                                <td><input class="form-control" name="location" id="location" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-info">Lưu thay đổi</button>
                </div>
            </form>
        </div>
    </div>
</div>