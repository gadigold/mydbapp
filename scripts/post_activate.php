<?php
ini_set("max_execution_time", 1000);
	if (getenv("ZS_RUN_ONCE_NODE") == 1) {
		require_once(dirname(__FILE__) . "/create_table.php");
	}
	echo "Post Activate Succesful";
	exit(0);	
?>