<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
</head>
<body>
<?php
        $key=$_POST['key'];
        $k=shell_exec("cat ./??????????????.txt");
        $k=rtrim($k);
        if ($key!=$k){
                echo "<script>alert('WRONG KEY!!');history.back();</script>";
                //header("Location: xxe.html");
        }
?>
<form method="POST" action="./xxe.php">
<p>
<label>UPLOAD PAGE</label>
</p>
</form>
<p>
<form enctype='multipart/form-data' action='upload_ok.php' method='post'>
        <input type='file' name='myfile'>
        <input type="hidden" value=<?php echo $key;?> name="key" />
        <button>Upload</button>
</form>
</p>
</body>
</html>
