<?
session_start();
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/classes/User.php");
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/classes/Main_classes.php");
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/core/dbo.php");

	if($_POST && $_POST['id'] != "" && $_SESSION['user']['permissions'] < 3){
		
		$where = array('id' => $_POST['id']);
		$table = "files"; 
		
		if(Element::Delete($where, $table)){
			echo "deleted";
		} else {
			echo "not";
		}
	}

?>