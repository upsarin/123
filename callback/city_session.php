<?
session_start();
if($_REQUEST['city']){	if($_REQUEST['city'] == "peter"){		$_SESSION['user']['city'] = "moscow";	}	if(!$_SESSION['user']['city']){
		$_SESSION['user']['city'] = $_REQUEST['city'];		unset($_REQUEST);		echo "ok";	} else {		if($_REQUEST['city'] && $_REQUEST['manualy'] == "Y" && ($_REQUEST['city'] != $_SESSION['user']['city'])){						unset($_REQUEST);			echo "ok";		} else {			echo "no";		}			}
	
}