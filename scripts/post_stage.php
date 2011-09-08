<?php

require_once ("deployment.inc");

//replace values in EmployeeService File
$serviceFile = $appLocation . "/services/EmployeeService.php";
$filestr = file_get_contents($serviceFile);
$filestr = str_replace("HOST_PLACEHOLDER", $dbHost, $filestr);
$filestr = str_replace("USER_PLACEHOLDER", $dbUsername, $filestr);
$filestr = str_replace("PASS_PLACEHOLDER", $dbPassword, $filestr);
$filestr = str_replace("DB_PLACEHOLDER", $dbName, $filestr);
$filestr = str_replace("TABLE_PLACEHOLDER", $dbTable, $filestr);
file_put_contents($serviceFile, $filestr);

echo "Configured app files . Post Stage Succesful\n";
exit ( 0 );

