<?php
$c="Grant select on skool.stureg to don@localhost";
//$c2="GRANT $per on $dts.$tbl to $usr@$hst;";
//echo $c;
$t="'don'@'localhost'";
$c3="SELECT grantee from information_schema.TABLE_PRIVILEGES where TABLE_NAME='stureg' && PRIVILEGE_TYPE='select' &&
GRANTEE="."$t".";";
echo $c3;
?>