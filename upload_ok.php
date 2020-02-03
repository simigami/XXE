<?php
// config
//if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' or $_SERVER['REMOTE_ADDR'] == '::1' ){
$key=$_POST['key'];
$k=shell_exec("cat ./????????????????????????.txt");
$k=rtrim($k);
if ( $key != $k )
{
        echo "<script>alert('WRONG KEY!! $key');history.back();</script>";
}
$uploads_dir = './uploads';
$allowed_ext = array('htaccess','txt');
$error = $_FILES['myfile']['error'];
$name = $_FILES['myfile']['name'];
$ext = array_pop(explode('.', $name));
if( $error != UPLOAD_ERR_OK ) {
        switch( $error ) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                        echo "FILE SIZE IS TOO BIG!! ($error)";
                        break;
                case UPLOAD_ERR_NO_FILE:
                        echo "FILE IS NOT ATTACHED!! ($error)";
                        break;
                default:
                        echo "FILE UPLOAD FAILED!! ($error)";
        }
        exit;
}
if( !in_array($ext, $allowed_ext)) {
        echo "NOT ALLOWED FILE EXTENSION";
        exit;
}
move_uploaded_file( $_FILES['myfile']['tmp_name'], "$uploads_dir/$name");
echo "<h2>UPLOAD SUCCESS!!</h2>";
?>