<form action="<?=$_SERVER['PHP_SELF'];?>?controller=AvatarController&method=store" method="post" enctype="multipart/form-data">
    <input type="file" name="fileAvatar">
    <input type="submit" value="Send">
</form>
<?php