<h2>Chi tiết</h2>
<a  class="btn btn-warning" href="index.php?page=user-list">Tro lai</a>
<table class="table table-striped table-bordered ">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $user->id ?></td>
        <td>
            <img style="width: 100px;height: auto" src="<?php echo "upload/" . $user->image ?>" alt="">
        </td>
        <td><?php echo $user->name ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->birthday ?></td>
        <td><?php echo $user->address ?></td>
    <tr>
    </tbody>
</table>
