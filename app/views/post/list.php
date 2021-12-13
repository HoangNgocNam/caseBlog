<?php
include_once "app/views/layout/header.php";
?>
<h2>Hien Thi</h2>
<a class="btn btn-warning" href="index.php?page=post-create">Add New</a>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Title</th>
        <th>Conten</th>
        <th>Post_Time</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td>
                    <?php echo $post->id ?>
                </td>
                <td>
                    <img style="width: 100px;height: auto" src="<?php echo "upload/" . $post->image ?>" alt="">
                </td>
                <td>
                    <?php echo $post->title ?>
                </td>
                <td>
                    <?php echo $post->content ?>
                </td>
                <td>
                    <?php echo $post->post_time ?>
                </td>
                <td>
                    <a class="btn btn-success" href="index.php?page=post-update&id=<?php echo $post->id ?>">Update</a>
                </td>
                <td>
                    <a class="btn btn-info" href="index.php?page=post-detail&id=<?php echo $post->id ?>">Detail</a>
                </td>
                <td><a class="btn btn-danger" onclick="return confirm('Ban muon xoa khong?')"
                       href="index.php?page=post-delete&id=<?php echo $post->id ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">Ở đây không có gì bạn eii</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
