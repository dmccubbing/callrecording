<?php

global $db;

echo "dropping table callrecording..";
sql("DROP TABLE IF EXISTS `callrecording`");
echo "done<br>\n";

echo "dropping table callrecording_module..";
sql("DROP TABLE IF EXISTS `callrecording_module`");
echo "done<br>\n";


?>
