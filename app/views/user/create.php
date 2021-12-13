<h2>Thêm Mới</h2>
<form method="post" enctype="multipart/form-data">
    <table  class="table table-striped table-bordered table-hover">
        <tr>
            <td>Họ Và tên
                <input class="form-control" type="text" name="name" placeholder="Nhap ten">
            </td>
        </tr>
        <tr>
            <td>Email
                <input class="form-control" type="email" name="email" placeholder="Nhap Email">
            </td>
        </tr>
        <tr>
            <td>Password
                <input class="form-control" type="text" name="password" placeholder="Nhap password">
            </td>
        </tr>
        <tr>
            <td>Ngày Sinh
                <input class="form-control" type="date" name="birthday" placeholder="Nhap date">
            </td>
        </tr>
        <tr>
            <td>Địa Chỉ
                <select name="address"  class="form-control">
                    <option value="Ha Noi">Ha Noi</option>
                    <option value="Hue">Hue</option>
                    <option value="Phu Tho">Phu Tho</option>
                    <option value="Hai Duong">Hai Duong</option>
                    <option value="Da Nang">Da Nang</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Ảnh
                <input class="form-control" type="file" name="fileUpToLoad">
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Add New User</button>
                <a type="button" class="btn btn-danger" href="index.php?page=user-list">
                    <button type="button">Back</button></a>
            </td>
        </tr>
    </table>
</form>
