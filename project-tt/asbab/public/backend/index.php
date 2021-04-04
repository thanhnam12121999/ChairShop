<?php 
	require_once'../../mvc/bridge.php';
//	gọi class App bên folder core
    $run1 = new Bridge();
    $run1->getAllPageBackend();
// run page app
	$run = new App("backend");
