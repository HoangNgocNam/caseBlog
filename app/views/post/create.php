<h2>Thêm Mới</h2>
<form action=""method="post" enctype="multipart/form-data">
    <table  class="table table-striped table-bordered table-hover">
        <tr>
            <td>Tiêu Đề
                <input  class="form-control" type="text" name="title" placeholder="Title">
            </td>
        </tr>
        <tr>
            <td>Nội Dung
                <textarea class="form-control" type="text" name="content" placeholder="Content"></textarea>
            </td>
        </tr>
        <tr>
            <td>Ngày Viết bài
                <input  class="form-control" type="date" name="post_time" placeholder="Post_time">
            </td>
        </tr>
        <tr>
            <td>User_id
                <input  class="form-control" type="text" name="user_id" value="<?php echo $_SESSION['user']->id ?>" readonly>
            </td>
        </tr>
        <tr>
            <td>Ảnh
                <input type="file" name="fileUpToLoad">
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Add New</button>
                <a href="index.php?page=post-list">
                    <button class="btn btn-info" type="button">Quay lai</button></a>
            </td>
        </tr>
    </table>
</form>
