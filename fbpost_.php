<form action="" method="get">

Enter Your Message:<input type="text" name="msg" placeholder="message" autocomplete="off" required><br>
Enter Link:<input type="text" name="link" placeholder="link" autocomplete="off" required><br>

<input type="submit" value="ok">
</form>
<?php
error_reporting(0);
if (!empty($m = $_GET["msg"])&&($l = $_GET['link'])) {
    echo "<a href='https://www.facebook.com/sharer/sharer.php?u=".$l."&quote=".$m."' target='_blank'>Post</a>";    
}
//&hashtag=%23AquiVaElHashtag
?>

