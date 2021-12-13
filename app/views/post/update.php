<h2>Cập Nhật</h2>
<form method="post" enctype="multipart/form-data">
    <table  class="table table-striped table-bordered table-hover">
        <tr>
            <td>Tiêu Đề
                <input class="form-control" type="text" name="title" placeholder="Title" value="<?php echo $post->title?>">
            </td>
        </tr>
        <tr>
            <td>Nội Dung
                <textarea  class="form-control" type="text" name="content" placeholder="Title" value="<?php echo $post->content?>"></textarea>
            </td>
        </tr>
        <tr>
            <td>Ngày Viết Bài
                <input  class="form-control"  type="date" name="post_time" placeholder="Title" value="<?php echo $post->post_time?>">
            </td>
        </tr>
        <tr>
            <td>User_id
                <input  class="form-control" type="text" name="user_id" value="<?php echo $_SESSION['user']->id ?>" readonly>
            </td>
        </tr>
        <tr>
            <td>Ảnh
                <input class="form-control" type="file" name="fileUpToLoad">
                <img style="width: 100px" src="<?php echo "upload/" . $post->image ?>" alt="">
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary type="submit">Update</button>
                <a href="index.php?page=post-list">
                    <button  class="btn btn-info" type="button">Quay lai</button></a>
            </td>
        </tr>
    </table>
</form>
