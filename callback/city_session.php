<?

session_start();
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/classes/User.php");

if($_REQUEST['city']){
        if($_SESSION['user']['city_find'] != "Y"){
            unset($_REQUEST);
            $_SESSION['user']['city_find'] = "Y";
            echo "ok";
        } else {
            echo "no";
        }
}

