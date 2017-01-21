<?php
if (isset($_REQUEST['ok'])) {
     $string = '<p>'.$_REQUEST['username'].'<br>'.$_REQUEST['msg'];
    file_put_contents('1.txt', $string, FILE_APPEND);
    header("Location: test.php");
    exit();
}
include ('1.txt');
?>
<form action="" method="post">
<input name="username">
<br><textarea name="msg" rows="10"></textarea>
<br><br>
<input type="submit" name="ok" value="Отправить" >
</form>