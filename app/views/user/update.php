<h2>Cập Nhật</h2>
<form method="post" enctype="multipart/form-data" action="">
    <table  class="table table-striped table-bordered table-hover">
        <tr>
            <td>Họ Và Tên
                <input class="form-control" type="text" name="name" placeholder="Nhap ten" value="<?php echo $user->name ?>">
            </td>
        </tr>
        <tr>
            <td>Email
                <input class="form-control" type="email" name="email" placeholder="Nhap Email" value="<?php echo $user->email ?>">
            </td>
        </tr>
        <tr>
            <td>Password
                <input class="form-control"type="text" name="password" placeholder="Nhap password" value="<?php echo $user->password ?>">
            </td>
        </tr>
        <tr>
            <td>Ngày sinh
                <input class="form-control" type="date" name="birthday" placeholder="Nhap date" value="<?php echo $user->birthday ?>">
            </td>
        </tr>
        <tr>
            <td>Địa chỉ
                <select name="address">
                    <option <?php echo $user->address == "Ha Noi" ? "selected" : "" ?> value="Ha Noi">Ha Noi</option>
                    <option <?php echo $user->address == "Hue" ? "selected" : "" ?> value="Hue">Hue</option>
                    <option <?php echo $user->address == "Phu Tho" ? "selected" : "" ?> value="Phu Tho">Phu Tho</option>
                    <option <?php echo $user->address == "Hai Duong" ? "selected" : "" ?> value="Hai Duong">Hai Duong</option>
                    <option <?php echo $user->address == "Da Nang" ? "selected" : "" ?> value="Da Nang">Da Nang</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Ảnh
                <input class="form-control" type="file" name="fileUpToLoad">
                <img style="width: 100px" src="<?php echo "upload/" . $user->image ?>" alt="">
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-success" type="submit">Update</button>
                <a href="index.php?page=user-list">
                    <button class="btn btn-info" type="button">Back</button>
                </a>
            </td>
        </tr>
    </table>
</form>
