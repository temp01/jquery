<?php
error_reporting(0);
$wait = $_REQUEST['wait'];
if($wait) {
        sleep($wait);
}

echo "requireTest(" . $_REQUEST['response'] . ");";
?>
