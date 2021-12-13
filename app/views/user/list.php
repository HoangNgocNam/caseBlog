<?php
include_once "app/views/layout/header.php";
?>
<h2>Hiển Thị Danh Sách</h2>
<a class="btn btn-warning" href="index.php?page=user-create">Add New</a>

<form action="" method="get">
    <table>
        <tr>
            <th><input type="text" name="search" placeholder="Nhập từ"></th>
            <th>
                <button type="submit">Search</button>
            </th>
        </tr>
    </table>
</form>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($users) || !empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php echo $user->id ?>
                </td>
                <td>
                    <img style="width: 100px;height: auto" src="<?php echo "upload/" . $user->image ?>" alt="">
                </td>
                <td>
                    <?php echo $user->name ?>
                </td>
                <td>
                    <?php echo $user->email ?>
                </td>
                <td>
                    <?php echo $user->birthday ?>
                </td>
                <td>
                    <?php echo $user->address ?>
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('ban muon xoa khong?')"
                       href="index.php?page=user-delete&id=<?php echo $user->id ?>">Delete</a>
                </td>
                <td>
                    <a class="btn btn-success" href="index.php?page=user-update&id=<?php echo $user->id ?>">Update</a>
                </td>
                <td>
                    <a class="btn btn-info" href="index.php?page=user-detail&id=<?php echo $user->id ?>">Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Khong co du lieu</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>