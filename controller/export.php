<?php
$filename = "testtest.xls";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
include "data_export.php";
?>