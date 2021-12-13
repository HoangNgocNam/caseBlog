<h2  style="font-family: 'Georgia,serif'">Chi Tiết</h2>
<div class="card" style="width: 50%;height: auto" >
    <img class="card-img-top" src="<?php echo "upload/" . $post->image ?>" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Tiêu Đề</h5>
        <p class="card-text"> <?php echo $post->title ?></p>
    </div>
    <div class="card-body">
        <h5 class="card-title">Thời Gian Đăng Bài</h5>
        <p class="card-text"><?php echo $post->post_time ?></p>
    </div>
    <div class="card-body">
        <h5 class="card-title">Nội Dung</h5>
        <ul class="list-group list-group-flush">
            <textarea  class="list-group-item"><?php echo $post->content ?></textarea>
        </ul>
<!--        <textarea  class="list-group-item">--><?php //echo $post->content ?><!--</textarea>-->
    </div>
    <div class="card-body">
        <a class="btn btn-warning" href="index.php?page=post-list">Quay lai</a>
    </div>
</div>