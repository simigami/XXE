<?php
libxml_disable_entity_loader(false);
libxml_use_internal_errors(true);

$xml=$_POST['abcd'];
$doc = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOENT);
$letter_check=array("DOCTYPE","ENTITY","UTF-8","127.0.0.1","HTTP");
foreach($letter_check as $no){
	if(strpos($xml,$no)==true){
		echo "NO ENTITY!";
		exit(-1);
	}
}
if($doc ==false){
        echo "\nFailed loading XML: ";
        foreach(libxml_get_errors() as $error){
                echo "<br>", $error->message;
        }
}
else{
        print_r($doc);
}
?>
