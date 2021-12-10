<h2>Cập Nhật</h2>
<form method="post">
    <input type="text" name="name" placeholder="Nhap ten" value="<?php echo $user->name ?>">
    <input type="email" name="email" placeholder="Nhap Email" value="<?php echo $user->email ?>">
    <input type="text" name="password" placeholder="Nhap password" value="<?php echo $user->password ?>">
    <input type="date" name="birthday" placeholder="Nhap date" value="<?php echo $user->birthday ?>">
<!--    <input type="text" name="address" placeholder="Nhap dia chi" value="--><?php //echo $user->birthday ?><!--">-->
    <select name="address">
        <option <?php echo $user->address=="Ha Noi"?"selected":"" ?> value="Ha Noi">Ha Noi</option>
        <option <?php echo $user->address=="Hue"?"selected":"" ?> value="Hue">Hue</option>
        <option <?php echo $user->address=="Phu Tho"?"selected":"" ?> value="Phu Tho">Phu Tho</option>
        <option <?php echo $user->address=="Hai Duong"?"selected":"" ?> value="Hai Duong">Hai Duong</option>
        <option <?php echo $user->address=="Da Nang"?"selected":"" ?> value="Da Nang">Da Nang</option>
    </select>
    <button type="submit">Update</button>
    <a href="index.php">
        <button>Back</button></a>
</form>
