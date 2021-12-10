<h2>Detail</h2>
<a href="index.php?page=user-list">Tro lai</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $user->id ?></td>
        <td><?php echo $user->name ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->birthday ?></td>
        <td><?php echo $user->address ?></td>
    <tr>
    </tbody>
</table>
