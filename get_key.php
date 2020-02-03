<?php
if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' or $_SERVER['REMOTE_ADDR'] == '::1' )
{
        echo "This is a upload key value : 19f5e5e8c5c73b888b80b0c07274a68c";
        system("cat ????????????????????????.txt");
}
else
{
        echo "<script>alert('You are not admin!!!');</script>";
        echo "<script>window.location.href='./xxe.html';</script>";
        exit;
}
?>