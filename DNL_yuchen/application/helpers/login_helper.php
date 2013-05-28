<?php

function checkLogin($userinfo){
	$db = DB();
	$sql = 'SELECT MAX(TABLE_NAME) as tablename FROM information_schema.TABLES WHERE TABLE_SCHEMA=DATABASE() AND TABLE_NAME LIKE "'.$prefix.'%"';
	$db->query($sql);
	
	if( $userinfo==null ){
		redirect($cas . "login?ext=&service=" . $service);
	}
}