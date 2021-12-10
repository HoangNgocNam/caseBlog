<h2>Thêm Mới</h2>
<form method="post" enctype="multipart/form-data">
    <input class="form-control" type="text" name="name" placeholder="Nhap ten">
    <input class="form-control" type="email" name="email" placeholder="Nhap Email">
    <input class="form-control" type="text" name="password" placeholder="Nhap password">
    <input class="form-control" type="date" name="birthday" placeholder="Nhap date">
<!--    <input type="text" name="address" placeholder="Nhap dia chi">-->
    <select name="address"  class="form-control">
        <option value="Ha Noi">Ha Noi</option>
        <option value="Hue">Hue</option>
        <option value="Phu Tho">Phu Tho</option>
        <option value="Hai Duong">Hai Duong</option>
        <option value="Da Nang">Da Nang</option>
    </select>
    <input type="file" name="fileUpToLoad">
    <button class="btn btn-primary" type="submit">Add New User</button>
    <a type="button" class="btn btn-danger" href="index.php?page=user-list">
        <button type="button">Back</button></a>
</form>
